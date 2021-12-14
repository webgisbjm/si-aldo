<?php

return [
    'userManagement' => [
        'title'          => 'User Management',
        'title_singular' => 'User Management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'username'                 => 'username',
            'username_helper'          => ' ',
            'phone'                    => 'Phone',
            'phone_helper'             => 'Format : 08xxxxxxxxxx',
            'approved'                 => 'Approved',
            'approved_helper'          => ' ',
        ],
    ],
    'administrativeManagement' => [
        'title'          => 'Administrative',
        'title_singular' => 'Administrative',
    ],
    'kecamatan' => [
        'title'          => 'Districts',
        'title_singular' => 'District',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nama',
            'name_helper'       => ' ',
            'color'             => 'Warna',
            'color_helper'      => ' ',
            'geojson'           => 'Geojson',
            'geojson_helper'    => 'Paste text from file *.geojson',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'kelurahan' => [
        'title'          => 'Urban Villages',
        'title_singular' => 'Urban Village',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nama',
            'name_helper'       => ' ',
            'geojson'           => 'Geojson',
            'geojson_helper'    => 'paste text from file *.geojson',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'kecamatans'        => 'District',
            'kecamatans_helper' => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'type'              => 'Type',
            'type_helper'       => '',
            'icon'              => 'Icon',
            'icon_helper'       => ' ',
            'layer'             => 'Layer Name',
            'layer_helper'      => 'Layer for webgis, Do not use number, space, or special character ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'asset' => [
        'title'          => 'SPALD',
        'title_singular' => 'SPALD',
    ],
    'build' => [
        'title'          => 'Sanitation Infrastructures',
        'title_singular' => 'Sanitation Infrastructure',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'lat'               => 'Latitude',
            'lat_helper'        => ' ',
            'lng'               => 'Longitude',
            'lng_helper'        => ' ',
            'year'              => 'Year',
            'year_helper'       => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'funded'            => 'Funded',
            'funded_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'kecamatans'        => 'District',
            'kecamatans_helper' => ' ',
            'kelurahans'        => 'Urban Village',
            'kelurahans_helper' => ' ',
            'categories'        => 'Category',
            'categories_helper' => ' ',
        ],
    ],
    'nsup' => [
        'title'          => 'NSUP / KOTAKU',
        'title_singular' => 'NSUP / KOTAKU',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'categories'        => 'Category',
            'categories_helper' => ' ',
            'kecamatans'        => 'District',
            'kecamatans_helper' => ' ',
            'kelurahans'        => 'Urban Village',
            'kelurahans_helper' => ' ',
            'years'             => 'Year',
            'years_helper'      => ' ',
            'lat'               => 'Latitude',
            'lat_helper'        => ' ',
            'lng'               => 'Longitude',
            'lng_helper'        => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'ipal' => [
        'title'          => 'DWWTP PERUMDA PALD',
        'title_singular' => 'DWWTP PERUMDA PALD',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'kelurahans'        => 'Urban Village',
            'kelurahans_helper' => ' ',
            'lat'               => 'Latitude',
            'lat_helper'        => ' ',
            'lng'               => 'Longitude',
            'lng_helper'        => ' ',
            'year'              => 'Operation Year',
            'year_helper'       => ' ',
            'categories'        => 'Category',
            'categories_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'capacity'          => "Capacity m3/days",
            'capacity_helper'   => ' ',
            'service'           => 'Service Area',
            'service_helper'    => ' ',
            'photos'            => 'Photo',
            'photos_helper'     => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
        ],
    ],
    'buildGallery' => [
        'title'          => 'Galleries',
        'title_singular' => 'Gallery',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'build'             => 'Building',
            'build_helper'      => ' ',
            'photo'             => 'Photo',
            'photo_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'dataAnalytic' => [
        'title'          => 'Data Analytics',
        'title_singular' => 'Data Analytic',
    ],
    'density' => [
        'title'          => 'Population',
        'title_singular' => 'Population',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'kelurahans'        => 'Urban Village',
            'kelurahans_helper' => ' ',
            'area'              => 'Area (Km2)',
            'area_helper'       => ' ',
            'population'        => 'Population',
            'population_helper' => ' ',
            'density'           => 'Density (people/km2)',
            'density_helper'    => '',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'year'              => 'Year',
            'year_helper'       => ' ',
        ],
    ],
    'sanitation' => [
        'title'          => 'Sanitations',
        'title_singular' => 'Sanitation',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'kecamatan'         => 'District',
            'kecamatan_helper'  => ' ',
            'secure'            => 'Secure Access (KK)',
            'secure_helper'     => ' ',
            'basic'             => 'Basic Access (KK)',
            'basic_helper'      => ' ',
            'poor'              => 'Poor Access (KK)',
            'poor_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'year'              => 'Year',
            'year_helper'       => ' ',
        ],
    ],
    'risk' => [
        'title'          => 'Wastewater Risk Level',
        'title_singular' => 'Wastewater Risk Level',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'kelurahan'         => 'Urban Village',
            'kelurahan_helper'  => ' ',
            'level'             => 'Level',
            'level_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'year'              => 'Year',
            'year_helper'       => ' ',
        ],
    ],
    'secured' => [
        'title'          => 'Secure Access',
        'title_singular' => 'Secure Access',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'kecamatan'           => 'District',
            'kecamatan_helper'    => ' ',
            'access'              => 'Secure Access (KK)',
            'access_helper'       => ' ',
            'communal'            => 'Communal Septictank (KK)',
            'communal_helper'     => ' ',
            'individual'          => 'Individual Septictank (KK)',
            'individual_helper'   => ' ',
            'mck_user'            => 'User of Safe MCK (KK)',
            'mck_user_helper'     => ' ',
            'qty_sr_pdpal'        => 'SR Perumda PALD (KK)',
            'qty_sr_pdpal_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'year'                => 'Year',
            'year_helper'         => ' ',
        ],
    ],
    'spm' => [
        'title'          => 'Minimum Services Standard',
        'title_singular' => 'Minimum Services Standard',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'kelurahans'         => 'Urban Village',
            'qty_house'         => 'House Amount',
            'basic_target'      => 'Basic Access Target',
            'spalds_target'     => 'SPALD-S Target',
            'spaldt_target'     => 'SPALD-T Target',
            'basic_realization'  => 'Basic Access Realization',
            'spalds_realization' => 'SPALD-S Realization',
            'spaldt_realization' => 'SPALD-T Realization',
            'year'              => 'Year',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Content Management',
        'title_singular' => 'Content Management',
    ],
    'contentCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentPage' => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'category'          => 'Categories',
            'category_helper'   => ' ',
            'tag'               => 'Tags',
            'tag_helper'        => ' ',
            'page_text'         => 'Full Text',
            'page_text_helper'  => ' ',
            'excerpt'           => 'Link Download',
            'excerpt_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
            'no'                => 'No',
            'no_helper'         => ' ',
            'year'              => 'Year',
            'year_helper'       => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'taskManagement' => [
        'title'          => 'Task Management',
        'title_singular' => 'Task Management',
    ],
    'taskStatus' => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'taskTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'task' => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'tag'                => 'Tags',
            'tag_helper'         => ' ',
            'attachment'         => 'Attachment',
            'attachment_helper'  => ' ',
            'due_date'           => 'Due date',
            'due_date_helper'    => ' ',
            'assigned_to'        => 'Assigned to',
            'assigned_to_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
            'created_by'         => 'Created By',
            'created_by_helper'  => ' ',
        ],
    ],
    'tasksCalendar' => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
    'infographic' => [
        'title'          => 'Infographics',
        'title_singular' => 'Infographic',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'content'           => 'Content',
            'content_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'maps' => [
        'drag'              => 'Drag Pin or Click On the Map to Get Coordinates',
        'location'          => 'Location',
        'thematic'          =>  'THEMATICS',
        'slum'              =>  'Slum Delineation 2015',
        'pipe'              =>  'SANITARY PIPE NETWORK',
        'risk'              =>  'Sanitary Risk Level',
        'density'           =>  'Peoples Density',
        'utility'           =>  'ADMINISTRATIVE & UTILITIES CITY',
        'asset'             =>  'SANITATION INFRASTRUCTURE',

    ],
];
