<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */

/**
 * Renders menus assigned to `main-menu` region.
 *
 */
echo $this->Menu->render($menu->links, [
    'class' => 'nav navbar-nav',
    'formatter' => function ($item, $info) {
        $options = [];
        if ($info['hasChildren'] && $info['depth'] === 0) {
            $item->title .= ' <span class="caret"></span>';
        }

        if ($info['depth'] > 0) {
            $options['childAttrs']['class'] = ['dropdown-submenu'];
        }

        return $this->Menu->formatter($item, $info, $options);
    },
]);
