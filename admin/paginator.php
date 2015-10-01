<?php 
	class Paginator {
	 
	    	private $_myconn;
	        private $_limit;
	        private $_page;
	        private $_query;
	        private $_total=13;

			public function __construct( $conn, $query ) {
			    $this->_myconn = new PDO("mysql:host=localhost;dbname=slack_invite", 'root', 'aftermath7');
				$this->_query= "SELECT * FROM `members`";
				//$rs= $this->_myconn->prepare( $this->_query );
			    
				//$rs->setFetchMode(PDO::FETCH_ASSOC);

			}
			public function getData( $limit = 3, $page = 1 ) {
     	
     			$page;	
			    $this->_limit   = $limit;
			    $this->_page    = $page;

			    if ( $this->_limit == 'all' ) {
			        $query      = $this->_query;
			    } else {

			        $query      = $this->_query. " LIMIT " . ( ( $this->_page - 1 ) * $this->_limit ) . ", $this->_limit";

			    }
			    $STH = $this->_myconn->prepare($query);
			    $STH->execute();
			    $results = $STH->fetchAll();
			    
			    foreach( $results as $row ) {
				    $data[] = $row;
				}
			  
			    $result         = new stdClass();
			    $result->page   = $this->_page;
			    $result->limit  = $limit;
			    $result->total  = $this->_total;
			    $result->data   = $data;
			 
			    return $result;
			}
			public function createLinks( $links, $list_class ) {
			    if ( $this->_limit == 'all' ) {
			        return '';
			    }
			 
			    $last       = ceil( $this->_total / $this->_limit );
			 
			    $start      = ( ( $this->_page - $links ) > 0 ) ? $this->_page - $links : 1;
			    $end        = ( ( $this->_page + $links ) < $last ) ? $this->_page + $links : $last;
			 
			    $html       = '<ul class="' . $list_class . '">';
			 
			    $class      = ( $this->_page == 1 ) ? "disabled" : "";
			    $html       .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page - 1 ) . '">&laquo;</a></li>';
			 
			    if ( $start > 1 ) {
			        $html   .= '<li><a href="?limit=' . $this->_limit . '&page=1">1</a></li>';
			        $html   .= '<li class="disabled"><span>...</span></li>';
			    }
			 
			    for ( $i = $start ; $i <= $end; $i++ ) {
			        $class  = ( $this->_page == $i ) ? "active" : "";
			        $html   .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . $i . '">' . $i . '</a></li>';
			    }
			 
			    if ( $end < $last ) {
			        $html   .= '<li class="disabled"><span>...</span></li>';
			        $html   .= '<li><a href="?limit=' . $this->_limit . '&page=' . $last . '">' . $last . '</a></li>';
			    }
			 
			    $class      = ( $this->_page == $last ) ? "disabled" : "";
			    $html       .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page + 1 ) . '">&raquo;</a></li>';
			 
			    $html       .= '</ul>';
			 
			    return $html;
			}
				 
	}
?>