<?php
/**
 * Basic class used for storing template options and providing
 * various helper functions for populating the template with
 * random content
 *
 * @author pixelcave
 *
 */
class Template {
    // Template Variables
    public  $name               = '',
            $version            = '',
            $author             = '',
            $robots             = '',
            $title              = '',
            $description        = '',
            $assets_folder      = '',
            $body_bg            = '',
            $main_nav           = array(),
            $main_nav_active    = '',
            $theme              = '',
            $l_sidebar_position,
            $l_sidebar_mini,
            $l_sidebar_visible_desktop,
            $l_sidebar_visible_mobile,
            $l_side_overlay_hoverable,
            $l_side_overlay_visible,
            $l_side_scroll,
            $l_header_fixed,
            $l_header_transparent,
            $inc_side_overlay,
            $inc_sidebar,
            $inc_header;

    private $nav_html           = '',
            $page_classes       = '',
            $placeholder_names  = array(
                'female' => array(
                    'Megan Dean',
                    'Amanda Powell',
                    'Julia Cole',
                    'Rebecca Reid',
                    'Laura Bell',
                    'Helen Silva',
                    'Lisa Gordon',
                    'Denise Watson',
                    'Amber Walker',
                    'Amy Hunter',
                    'Judy Alvarez',
                    'Linda Moore',
                    'Ashley Welch',
                    'Sara Holland',
                    'Rebecca Gray',
                    'Evelyn Willis',
                    'Susan Elliott',
                    'Emma Cooper',
                    'Ann Parker',
                    'Tiffany Kim'
                ),
                'male' => array(
                    'John Parker',
                    'Ryan Hall',
                    'Ronald George',
                    'Donald Barnes',
                    'Vincent Sims',
                    'Walter Fox',
                    'George Stone',
                    'Eric Lawson',
                    'Joshua Munoz',
                    'Jack Greene',
                    'Dennis Ross',
                    'Ethan Howard',
                    'Craig Stone',
                    'Keith Simpson',
                    'Roger Hart',
                    'Adam Hall',
                    'Bruce Edwards',
                    'Jeremy Fuller',
                    'Eugene Burke',
                    'Scott Ruiz'
                )
            ),
            $placeholder_text   = array(
                'small'     => 'Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.',
                'medium'    => 'Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci et.',
                'large'     => 'Felis ullamcorper curae erat nulla luctus sociosqu phasellus posuere habitasse sollicitudin, libero sit potenti leo ultricies etiam blandit id platea augue, erat habitant fermentum lorem commodo taciti tristique etiam curabitur suscipit lacinia habitasse amet mauris eu eget ipsum nec magna in, adipiscing risus aenean turpis proin duis fringilla praesent ornare lorem eros malesuada vitae nullam diam velit potenti consectetur, vehicula accumsan risus lectus tortor etiam facilisis tempus sapien tortor, mi vestibulum taciti dapibus viverra ac justo vivamus erat phasellus turpis nisi class praesent duis ligula, vel ornare faucibus potenti nibh turpis, at id semper nunc dui blandit. Enim et nec habitasse ultricies id tortor curabitur, consectetur eu inceptos ante conubia tempor platea odio, sed sem integer lacinia cras non risus euismod turpis platea erat ultrices iaculis rutrum taciti, fusce lobortis adipiscing dapibus habitant sodales gravida pulvinar, elementum mi tempus ut commodo congue ipsum justo nec dui cursus scelerisque elementum volutpat tellus nulla laoreet taciti, nibh suspendisse primis arcu integer vulputate etiam ligula lobortis nunc, interdum commodo libero aliquam suscipit phasellus sollicitudin arcu varius venenatis erat ornare tempor nullam donec vitae etiam tellus.'
            );

    /**
     * Class constructor
     */
    public function __construct($name = '', $version = '', $assets_folder = '') {
        // Set Template's name, version and assets folder
        $this->name                 = $name;
        $this->version              = $version;
        $this->assets_folder        = $assets_folder;
    }

    /**
     * Builds #page-container classes
     *
     * @param   boolean $print True to print the classes and False to return them
     *
     * @return  string  Returns the classes if $print is set to false
     */
    public function page_classes($print = true) {
        // Build page classes
        if ($this->l_sidebar_position == 'left') {
            $this->page_classes .= ' sidebar-l';
        } else if ($this->l_sidebar_position == 'right') {
            $this->page_classes .= ' sidebar-r';
        }

        if ($this->l_sidebar_mini) {
            $this->page_classes .= ' sidebar-mini';
        }

        if ($this->l_sidebar_visible_desktop) {
            $this->page_classes .= ' sidebar-o';
        }

        if ($this->l_sidebar_visible_mobile) {
            $this->page_classes .= ' sidebar-o-xs';
        }

        if ($this->l_side_overlay_hoverable) {
            $this->page_classes .= ' side-overlay-hover';
        }

        if ($this->l_side_overlay_visible) {
            $this->page_classes .= ' side-overlay-o';
        }

        if ($this->l_side_scroll) {
            $this->page_classes .= ' side-scroll';
        }

        if ($this->l_header_fixed) {
            $this->page_classes .= ' header-navbar-fixed';
        }

        if ($this->l_header_transparent) {
            $this->page_classes .= ' header-navbar-transparent';
        }

        // Print or return page classes
        if ($this->page_classes) {
            if ($print) {
                echo ' class="'. trim($this->page_classes) .'"';
            } else {
                return trim($this->page_classes);
            }
        } else {
            return false;
        }
    }

    /**
     * Builds main navigation
     *
     * @param   boolean     $print True to print the navigation and False to return it
     *
     * @return  string      Returns the navigation if $print is set to false
     */
    public function build_nav($print = true) {
        // Build navigation
        $this->build_nav_array($this->main_nav);

        // Print or return navigation
        if ($print) {
            echo $this->nav_html;
        } else {
            return $this->nav_html;
        }
    }

    /**
     * Build navigation helper - Builds main navigation one level at a time
     *
     * @param string    $nav_array A multi dimensional array with menu/submenus links
     */
    private function build_nav_array($nav_array) {
        foreach ($nav_array as $node) {
            // Get all vital link info
            $link_name      = isset($node['name']) ? $node['name'] : '';
            $link_icon      = isset($node['icon']) ? '<i class="' . $node['icon'] . '"></i>' : '';
            $link_url       = isset($node['url']) ? $node['url'] : '#';
            $link_sub       = isset($node['sub']) && is_array($node['sub']) ? true : false;
            $link_type      = isset($node['type']) ? isset($node['type']) : '';
            $sub_active     = false;
            $link_active    = $link_url == $this->main_nav_active ? true : false;

            // If link type is a header
            if ($link_type == 'heading') {
                $this->nav_html .= "<li class=\"nav-main-heading\">$link_name</li>\n";
            } else {
                // If it is a submenu search for an active link in all sub links
                if ($link_sub) {
                    $sub_active = $this->build_nav_array_search($node['sub']) ? true : false;
                }

                // Set menu properties
                $li_prop        = $sub_active ? ' class="open"' : '';
                $link_prop      = $link_sub ? ' class="nav-submenu' . ($link_active ? ' active' : '') . '" data-toggle="nav-submenu"' : ($link_active ? ' class="active"' : '');

                // Add the link
                $this->nav_html .= "<li$li_prop>\n";
                $this->nav_html .= "<a$link_prop href=\"$link_url\">$link_icon$link_name</a>\n";

                // If it is a submenu, call the function again
                if ($link_sub) {
                    $this->nav_html .= "<ul>\n";
                    $this->build_nav_array($node['sub']);
                    $this->nav_html .= "</ul>\n";
                }

                $this->nav_html .= "</li>\n";
            }
        }
    }

    /**
     * Build navigation helper - Search navigation array for active menu links
     *
     * @param   string      $nav_array A multi dimensional array with menu/submenus links
     *
     * @return  boolean     Returns true if an active link is found
     */
    private function build_nav_array_search($nav_array) {
        foreach ($nav_array as $node) {
            if (isset($node['url']) && ($node['url'] == $this->main_nav_active)) {
                return true;
            } else if (isset($node['sub']) && is_array($node['sub'])) {
                if ($this->build_nav_array_search($node['sub'])) {
                    return true;
                }
            }
        }
    }

    /**
     * Prints random paragraphs
     *
     * @param string    $size   'small', 'medium', 'large' available paragraph sizes
     * @param int       $num    The number of paragraphs to be printed
     *
     */
    public function get_text($size = 'medium', $num = 0) {
        if ($num > 0) {
            for ($i = 0; $i < $num; $i++) {
                echo '<p>' . $this->placeholder_text[$size] . '</p>'. "\n";
            }
        } else {
            echo '<p>' . $this->placeholder_text[$size] . '</p>'. "\n";
        }
    }

    /**
     * Prints a random user name
     *
     * @param string    $gender 'male' or 'female' for a specific name
     */
    public function get_name($gender = '') {
        $available  = array('male', 'female');
        $gender_f   = ($gender ? $gender : $available[rand(0, 1)]);

        echo $this->placeholder_names[$gender_f][rand(0, 19)];
    }

    /**
     * Prints a random or a specific avatar from the avatars folder
     *
     * @param int       $id     A number for printing a specific avatar
     * @param string    $gender 'female' or 'male' for a specific gender
     * @param int       $size   32, 48, 96 or 128 pixels
     * @param boolean   $thumb  Add avatar thumb class or not
     */
    public function get_avatar($id = 0, $gender = '', $size = 0, $thumb = false) {
        $id_f       = ($id ? $id : ($gender ? ($gender == 'female' ? rand(1, 8) : rand(9, 16)) : rand(1, 16)));
        $class_f    = '';

        if ($size == 32) {
            $class_f = ' img-avatar32';
        } else if ($size == 48) {
            $class_f = ' img-avatar48';
        } else if ($size == 96) {
            $class_f = ' img-avatar96';
        } else if ($size == 128) {
            $class_f = ' img-avatar128';
        }

        if ($thumb) {
            $class_f .= ' img-avatar-thumb';
        }

        echo '<img class="img-avatar' . $class_f . '" src="' . $this->assets_folder . '/img/avatars/avatar' . $id_f . '.jpg" alt="">'. "\n";
    }

    /**
     * Prints a random or a specific photo from the photos folder
     *
     * @param int       $id     A number for printing a specific image
     * @param string    $class  CSS classes for the img tag
     */
    public function get_photo($id = 0, $retina = false, $class = '') {
        echo '<img' . ($class ? ' class="' . $class . '"' : '') . ' src="' . $this->assets_folder . '/img/photos/photo' . ($id ? $id : rand(1, 17)) . ($retina ? '@2x' : '') . '.jpg" alt="">'. "\n";
    }

    /**
     * Prints a random label
     *
     * @param boolean $print True to print the generated label and False to return it
     *
     * @return string  Returns the generated label if $print is set to false
     */
    public function get_label($print = true) {
        // Label seed data
        $data   = array(
            '0' => array('class' => 'success', 'text'  => 'VIP'),
            '1' => array('class' => 'info', 'text'  => 'Business'),
            '2' => array('class' => 'primary', 'text'  => 'Personal'),
            '3' => array('class' => 'warning', 'text'  => 'Trial'),
            '4' => array('class' => 'danger', 'text'  => 'Disabled')
        );

        // Generate label
        $rand   = rand(0, 4);
        $label  = '<span class="label label-' . $data[$rand]['class'] . '">' . $data[$rand]['text'] . '</span>'. "\n";

        // Print or return generated label
        if ($print) {
            echo $label;
        } else {
            return $label;
        }
    }
}