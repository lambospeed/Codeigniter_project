
var base_url = "<?php echo site_url(); ?>";

$(function () {
    $('#jobpost_form').submit(function() {
        $.ajax({
            url: this.action,
            type: this.method,
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.status == 'error') {
                    for( var i=0; i<response.response.back; i++) {
                        var a = $(".wizard .submit-tabs li.active");
                        prevTab(a);
                    }
                    alert(response.message);
                } else if (response.status == 'success') {
                    return flase;
                }
            }
        });
        return false;
    });

    $('.payment_tag').click(function () {
        var tag_value = $(this).data('tag-value');
        $('#payment_type').val(tag_value);$('#payment_type').val(tag_value);
    });

    $('#category_id').change(function () {
        var id = $(this).val();
        var url = base_url + "postjob/getSubcatsById";
        console.log(url);
        $.ajax({
            url: url,
            data:{'c_id': id},
            type: 'POST',
            dataType: 'json',
            success: function(rpn) {
                var select_html = '';
                for(var i = 0; i < rpn.length; i++) {
                    var res = rpn[i];
                    select_html += "<option value="+res['id']+">"+res['name']+"</option>";
                }
                $('.example-multiple-selected').multiselect("destroy");
                $('.example-multiple-selected').html(select_html);
                $('.example-multiple-selected').multiselect();
                $('.example-multiple-selected').multiselect('refresh');
            }
        })
    });

    $('#btnSearch').click(function () {
        var serch_word = $('input[name="hdrkeyword"]').val();
        if (serch_word == '') {
            alert ('Please Insert Keyword');
            return false;
        } else {
            $('#hdrsearch_form').submit();
            return false;
        }
    })

    $('#partner_form').submit(function() {
        $.ajax({
            url: this.action,
            type: this.method,
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.status == 'error') {
                    for( var i=0; i<response.response.back; i++) {
                        var a = $(".wizard .submit-tabs li.active");
                        prevTab(a);
                    }
                    alert(response.message);
                } else if (response.status == 'success') {
                    return flase;
                }
            }
        });
        return false;
    });

    var option = {
        url: function(phrase) {
        return base_url+"home/getKeywordsName";
        },
    
        getValue: function(element) {
        return element.name;
        },
    
        ajaxSettings: {
            dataType: "json",
            method: "POST",
            data: {
                dataType: "json"
            }
        },
    
        preparePostData: function(data) {
        data.phrase = $("#example-ajax-post").val();
        return data;
        },
        
        list: {
            match: {
                enabled: true
            },
            maxNumberOfElements: 6,
    
            showAnimation: {
                type: "slide",
                time: 300
            },
            hideAnimation: {
                type: "slide",
                time: 300
            }
        },
        theme: "round",
        requestDelay: 400
    };

    $('#findService').easyAutocomplete(option);
    $('.easy-autocomplete-container').css('text-align', 'left');
});