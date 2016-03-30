<?php

return [
    's_articles_translations' => [
        'readOnly' => true,
    ],
    's_articles_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Article',
        'identifiers' => ['id', 'articleid', 'articledetailsid'],
        'foreignKey' => 'articledetailsid',
        'coreAttributes' => ['attr1', 'attr2', 'attr3', 'attr4', 'attr5', 'attr6', 'attr7', 'attr8', 'attr9', 'attr10', 'attr11', 'attr12', 'attr13', 'attr14', 'attr15', 'attr16', 'attr17', 'attr18', 'attr19', 'attr20'],
        'dependingTables' => ['s_article_configurator_templates_attributes', 's_articles_translations'],
    ],
    's_articles_prices_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\ArticlePrice',
        'identifiers' => ['id', 'priceid'],
        'foreignKey' => 'priceid',
        'coreAttributes' => [],
        'dependingTables' => ['s_article_configurator_template_prices_attributes']
    ],
    's_articles_img_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\ArticleImage',
        'identifiers' => ['id', 'imageid'],
        'foreignKey' => 'imageid',
        'coreAttributes' => ['attribute1', 'attribute2', 'attribute3'],
        'dependingTables' => []
    ],
    's_articles_downloads_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\ArticleDownload',
        'identifiers' => ['id', 'downloadid'],
        'foreignKey' => 'downloadid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_articles_information_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\ArticleLink',
        'identifiers' => ['id', 'informationid'],
        'foreignKey' => 'informationid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_filter_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\PropertyGroup',
        'identifiers' => ['id', 'filterid'],
        'foreignKey' => 'filterid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_filter_options_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\PropertyOption',
        'identifiers' => ['id', 'optionid'],
        'foreignKey' => 'optionid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_filter_values_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\PropertyValue',
        'identifiers' => ['id', 'valueid'],
        'foreignKey' => 'valueid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_articles_esd_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\ArticleEsd',
        'identifiers' => ['id', 'esdid'],
        'foreignKey' => 'esdid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_article_configurator_templates_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Template',
        'identifiers' => ['id', 'template_id'],
        'foreignKey' => 'template_id',
        'coreAttributes' => ['attr1', 'attr2', 'attr3', 'attr4', 'attr5', 'attr6', 'attr7', 'attr8', 'attr9', 'attr10', 'attr11', 'attr12', 'attr13', 'attr14', 'attr15', 'attr16', 'attr17', 'attr18', 'attr19', 'attr20'],
        'dependingTables' => ['s_articles_attributes', 's_articles_translations']
    ],
    's_article_configurator_template_prices_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\TemplatePrice',
        'identifiers' => ['id', 'template_price_id'],
        'foreignKey' => 'template_price_id',
        'coreAttributes' => [],
        'dependingTables' => ['s_articles_prices_attributes']
    ],
    's_articles_supplier_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\ArticleSupplier',
        'identifiers' => ['id', 'supplierid'],
        'foreignKey' => 'supplierid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_emarketing_banners_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Banner',
        'identifiers' => ['id', 'bannerid'],
        'foreignKey' => 'bannerid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_blog_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Blog',
        'identifiers' => ['id', 'blog_id'],
        'foreignKey' => 'blog_id',
        'coreAttributes' => ['attribute1', 'attribute2', 'attribute3', 'attribute4', 'attribute5', 'attribute6'],
        'dependingTables' => []
    ],
    's_categories_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Category',
        'identifiers' => ['id', 'categoryid'],
        'foreignKey' => 'categoryid',
        'coreAttributes' => ['attribute1', 'attribute2', 'attribute3', 'attribute4', 'attribute5', 'attribute6'],
        'dependingTables' => []
    ],
    's_core_countries_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Country',
        'identifiers' => ['id', 'countryid'],
        'foreignKey' => 'countryid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_core_countries_states_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\CountryState',
        'identifiers' => ['id', 'stateid'],
        'foreignKey' => 'stateid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_user_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Customer',
        'identifiers' => ['id', 'userid'],
        'foreignKey' => 'userid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_user_billingaddress_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\CustomerBilling',
        'identifiers' => ['id', 'billingid'],
        'foreignKey' => 'billingid',
        'coreAttributes' => ['text1', 'text2', 'text3', 'text4', 'text5', 'text6'],
        'dependingTables' => ['s_order_billingaddress_attributes']
    ],
    's_user_shippingaddress_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\CustomerShipping',
        'identifiers' => ['id', 'shippingid'],
        'foreignKey' => 'shippingid',
        'coreAttributes' => ['text1', 'text2', 'text3', 'text4', 'text5', 'text6'],
        'dependingTables' => ['s_order_shippingaddress_attributes']
    ],
    's_order_basket_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\OrderBasket',
        'identifiers' => ['id', 'basketid'],
        'foreignKey' => 'basketid',
        'coreAttributes' => ['attribute1', 'attribute2', 'attribute3', 'attribute4', 'attribute5', 'attribute6'],
        'dependingTables' => ['s_order_details_attributes']
    ],
    's_order_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Order',
        'identifiers' => ['id', 'orderid'],
        'foreignKey' => 'orderid',
        'coreAttributes' => ['attribute1', 'attribute2', 'attribute3', 'attribute4', 'attribute5', 'attribute6'],
        'dependingTables' => []
    ],
    's_order_details_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\OrderDetail',
        'identifiers' => ['id', 'detailid'],
        'foreignKey' => 'detailid',
        'coreAttributes' => ['attribute1', 'attribute2', 'attribute3', 'attribute4', 'attribute5', 'attribute6'],
        'dependingTables' => ['s_order_basket_attributes']
    ],
    's_order_billingaddress_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\OrderBilling',
        'identifiers' => ['id', 'billingid'],
        'foreignKey' => 'billingid',
        'coreAttributes' => ['text1', 'text2', 'text3', 'text4', 'text5', 'text6'],
        'dependingTables' => ['s_user_billingaddress_attributes']
    ],
    's_order_shippingaddress_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\OrderShipping',
        'identifiers' => ['id', 'shippingid'],
        'foreignKey' => 'shippingid',
        'coreAttributes' => ['text1', 'text2', 'text3', 'text4', 'text5', 'text6'],
        'dependingTables' => ['s_user_shippingaddress_attributes']
    ],
    's_order_documents_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Document',
        'identifiers' => ['id', 'documentID'],
        'foreignKey' => 'documentID',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_core_customergroups_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\CustomerGroup',
        'identifiers' => ['id', 'customergroupid'],
        'foreignKey' => 'customergroupid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_premium_dispatch_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Dispatch',
        'identifiers' => ['id', 'dispatchid'],
        'foreignKey' => 'dispatchid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_product_streams_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\ProductStream',
        'identifiers' => ['id', 'streamid'],
        'foreignKey' => 'streamid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_emotion_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Emotion',
        'identifiers' => ['id', 'emotionid'],
        'foreignKey' => 'emotionid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_cms_support_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Form',
        'identifiers' => ['id', 'cmssupportid'],
        'foreignKey' => 'cmssupportid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_core_config_mails_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Mail',
        'identifiers' => ['id', 'mailid'],
        'foreignKey' => 'mailid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_media_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Media',
        'identifiers' => ['id', 'mediaid'],
        'foreignKey' => 'mediaid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_core_paymentmeans_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Payment',
        'identifiers' => ['id', 'paymentmeanid'],
        'foreignKey' => 'paymentmeanid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_export_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\ProductFeed',
        'identifiers' => ['id', 'exportid'],
        'foreignKey' => 'exportid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_cms_static_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Site',
        'identifiers' => ['id', 'cmsstaticid'],
        'foreignKey' => 'cmsstaticid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_core_auth_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\User',
        'identifiers' => ['id', 'authid'],
        'foreignKey' => 'authid',
        'coreAttributes' => [],
        'dependingTables' => []
    ],
    's_emarketing_vouchers_attributes' => [
        'readOnly' => false,
        'model' => 'Shopware\Models\Attribute\Voucher',
        'identifiers' => ['id', 'voucherid'],
        'foreignKey' => 'voucherid',
        'coreAttributes' => [],
        'dependingTables' => []
    ]
];