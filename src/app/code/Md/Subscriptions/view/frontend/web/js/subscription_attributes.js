define([
        'jquery',
        'underscore',
        'mage/template',
        'jquery/list-filter'
        ], function (
            $,
            _,
            template
        ) {
            function main(config, element) {
                var $element = $(element);
                $(document).on('click','clickme',function() {
                        var param = 'ajax=1';
                            $.ajax({
                                showLoader: true,
                                url: http://magento2.local/subscriptions/index/test,
                                data: param,
                                type: "POST",
                                dataType: 'json'
                            }).done(function (data) {
                                $('#test').removeClass('hideme');
                                var html = template('#test', {posts:data}); 
                                $('#test').html(html);
                            });
                    });
            };
        return main;
    });