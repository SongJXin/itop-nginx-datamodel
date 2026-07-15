<?php

SetupWebPage::AddModule(
    __FILE__,
    'nginx-cmdb/1.0.1',
    array(
        'label' => 'Nginx CMDB',

        'category' => 'datamodel',

        'dependencies' => array(
            'itop-config-mgmt/3.2.0',
        ),

        'mandatory' => false,

        'visible' => true,

        'datamodel' => array(
            'model.nginx-cmdb.xml',
        ),

        'data.struct' => array(
        ),

        'data.sample' => array(
        ),

        'doc.manual_setup' => '',

        'doc.more_information' => '',
    )
);