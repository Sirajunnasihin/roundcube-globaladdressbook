<?php return array(
    'root' => array(
        'name' => 'ak-group/globaladdressbook',
        'pretty_version' => '3.1',
        'version' => '3.1.0.0',
        'reference' => null,
        'type' => 'roundcube-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'ak-group/globaladdressbook' => array(
            'pretty_version' => '3.1',
            'version' => '3.1.0.0',
            'reference' => null,
            'type' => 'roundcube-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'pretty_version' => '0.3.2',
            'version' => '0.3.2.0',
            'reference' => 'c4335e20b86cfe3a184ccf24d675c6a0338a372a',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../roundcube/plugin-installer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
