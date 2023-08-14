<ul class="sidebar-menu">

    <li class="header">Navigasi Utama</li>
    <?php foreach ($menu as $parent => $parent_params): ?>
        <?php if (empty($page_auth[$parent_params['url']]) || $this->ion_auth->in_group($page_auth[$parent_params['url']])): ?>
            <?php if (empty($parent_params['children'])): ?>
                <?php $active = ($current_uri == $parent_params['url'] || $ctrler == $parent); ?>
                <li class='<?php if ($active) echo 'active'; ?>'>
                    <a href='<?php echo base_url($parent_params['url']); ?>'>
                        <i class='<?php echo $parent_params['icon']; ?>'></i> <?php echo $parent_params['name']; ?>
                    </a>
                </li>
            <?php else: ?>
                <?php $parent_active = ($ctrler == $parent); ?>
                <li class='treeview <?php if ($parent_active) echo 'active'; ?>'>
                    <a href='#'>
                        <i class='<?php echo $parent_params['icon']; ?>'></i> <span><?php echo $parent_params['name']; ?></span> <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                    </a>
                    <ul class='treeview-menu'>
                        <?php foreach ($parent_params['children'] as $name => $url): ?>
                            <?php $icon = is_array($url) && isset($url['icon']) ? $url['icon'] : 'fa fa-circle-o'; ?>
                            <?php $child_active = ($current_uri == (is_array($url) ? $url['url'] : $url)); ?>
                            <?php if (is_array($url) && !empty($url['children'])): ?>
                                <li class='treeview <?php if ($child_active) echo 'active'; ?>'>
                                    <a href='#'><i class='<?php echo $icon; ?>'></i> <?php echo $name; ?></a>
                                    <ul class='treeview-menu'>
                                        <?php foreach ($url['children'] as $subname => $suburl): ?>
                                            <?php $subicon = is_array($suburl) && isset($suburl['icon']) ? $suburl['icon'] : 'fa fa-circle-o'; ?>
                                            <?php $subchild_active = ($current_uri == (is_array($suburl) ? $suburl['url'] : $suburl)); ?>
                                            <li <?php if ($subchild_active) echo 'class="active"'; ?>>
                                                <a href='<?php echo base_url(is_array($suburl) ? $suburl['url'] : $suburl); ?>'><i class='<?php echo $subicon; ?>'></i> <?php echo $subname; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li <?php if ($child_active) echo 'class="active"'; ?>>
                                    <a href='<?php echo base_url(is_array($url) ? $url['url'] : $url); ?>'><i class='<?php echo $icon; ?>'></i> <?php echo $name; ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php if (!empty($useful_links)): ?>
        <li class="header">BANTUAN</li>
        <?php foreach ($useful_links as $link): ?>
            <?php if ($this->ion_auth->in_group($link['auth'])): ?>
                <li>
                    <a href="<?php echo starts_with($link['url'], 'http') ? $link['url'] : base_url($link['url']); ?>" target='<?php echo $link['target']; ?>'>
                        <i class="fa fa-circle-o <?php echo $link['color']; ?>"></i> <?php echo $link['name']; ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
