var base_url = $("base").attr('href');
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}
$('.bs-component [data-toggle="popover"]').popover();
$('.bs-component [data-toggle="tooltip"]').tooltip();
// Gallery Start
$("#AddGalleryCat").on("aftersubmit", function (e, data) {
    $('#pleasewait').modal('hide');
    toastr[data.type](data.message);
    if (data.type === 'success') {
        $(this).trigger('reset');
        location.reload();
    }
});

$("#uploaded_images").on('click', '.img_id', function () {
    var id = $(this).attr('img_id');
    var url = $(this).attr('img_url');
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete !'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: base_url + 'Gallery_master/delete/gallery_items/id/' + id,
                type: 'post',
                dataType: 'json',
                data: {
                    id: id,
                    url: url
                },
                success: function (data) {
                    if (data.type === "success")
                    {
                        $('#items_' + id).hide();
                        toastr[data.type](data.message);
                    } else if (data.type === "error") {
                        toastr[data.type](data.message);
                    }

                },
                error: function (data) {
                    console.log('unable to send request..');
                }
            });
        }
    });
});

// Gallery End


//Category Gallery

$("#uploaded_category").on('click', '.cat_id', function () {
    var id = $(this).attr('cat_id');

    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete !'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: base_url + 'Gallery_master/delete/gallery/s_no/' + id,
                type: 'post',
                dataType: 'json',
                data: {id: id},
                success: function (data) {
                    $('.lg-close').trigger('click');
                    if (data.type === "success")
                    {
                        $('#cat' + id).hide();
                        toastr[data.type](data.message);
                    } else if (data.type === "error") {
                        toastr[data.type](data.message);
                    }

                },
                error: function (data) {
                    console.log('unable to send request..');
                }
            });
        }
    });
});

// End Category Gallery

// Front Desk Start......................................................................................................................................
// Admission_enquary Start 
var adenquiryTable = $('.adenquiryTables').DataTable({
    serverSide: false,
    ajax: base_url + 'front_desk/Addmission_enq_list',
    "columns": [
        {"data": "sr_no"},
        {"data": "name"},
        {"data": "phone"},
        {"data": "source"},
        {"data": "dates"},
        {"data": "last_dates"},
        {"data": "next_dates"},
        {"data": "status"},
        {"data": "action"}
    ],
    dom: 'Bfrtip',
    buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
    ]
});

$("#addenq").on("aftersubmit", function (e, data) {
    $('#pleasewait').modal('hide');
    toastr[data.type](data.message)
    if (data.type === 'success') {
        adenquiryTable.ajax.url(base_url + "Front_desk/Addmission_enq_list").load();
        $(this).trigger('reset');
        $("#add-new-addenq").modal('hide');
    }
});

$(".adenquiryTables").on('click', '.edit-addenqCall', function () {
    var id = $(this).attr('addenq_id');
    console.log(id)
    $.ajax({
        url: base_url + 'Front_desk/addmision_enq_frontdesk_retrive',
        type: 'post',
        dataType: 'json',
        data: {id: id},
        success: function (data) {
            var permission = data.data[0];
            $("#aefr_id").val(permission.id);
            $("#create_by").html(permission.staffName);
            $("#select_status").val(permission.status);
            $("#enq_date").html(permission.dates);
            $("#last_enq_date").html(permission.last_dates);
            $("#next_enq_date").html(permission.next_dates);
            $("#enq_phone").html(permission.phone);
            $("#enq_address").html(permission.address);
            $("#enq_ref").html(permission.ref);
            $("#enq_desc").html(permission.des);
            $("#enq_note").html(permission.note);
            $("#enq_source").html(permission.source);
            $("#enq_assigned").html(permission.assigned);
            $("#enq_email").html(permission.email);
            $("#enq_class").html(permission.className + permission.sectionName);
            $("#enq_child").html(permission.no_child);
        },
        error: function (data) {
            console.log('unable to send request..');
        }
    });
});

$(".adenquiryTables").on('click', '.delete_addenq', function () {
    var id = $(this).attr('addenq_id');
    swal({
        fadeDuration: 1000,
        fadeDelay: 0.50,
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete !'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: base_url + 'Front_desk/delete/addmision_enq_frontdesk/id/' + id,
                type: 'post',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function (data) {
                    if (data.type === "success")
                    {
                        adenquiryTable.ajax.url(base_url + "Front_desk/Addmission_enq_list").load();
                        toastr[data.type](data.message);
                    } else if (data.type === "error") {
                        toastr[data.type](data.message);
                    }
                },
                error: function (data) {
                    console.log('unable to send request..');
                }
            });
        }
    });
});

$(".adenquiryTables").on('click', '.edit-addenqCall', function () {
    var id = $(this).attr('addenq_id');
    $(".timeline").html('');
    $.ajax({
        url: base_url + 'Front_desk/Addmission_enq_list_follow',
        type: 'post',
        dataType: 'json',
        data: {
            id: id
        },
        success: function (datas) {
            var datas = datas.data;
            $.each(datas, function (index, data) {
                $(".timeline").append(data['action']);
            });
        },
        error: function (data) {
            console.log('unable to send request..');
        }
    });
});

function abc(id) {
    $.ajax({
        url: base_url + 'Front_desk/Addmission_enq_list_follows',
        type: 'post',
        dataType: 'json',
        data: {
            id: id
        },
        success: function (datas) {
            var datas = datas.data;
            $.each(datas, function (index, data) {
                $(".timeline").append(data['action']);
            });
        },
        error: function (data) {
            console.log('unable to send request..');
        }
    });
}

$("#addenqfollow").on('submit', function (e) {
    e.preventDefault();
    var form = $(this);
    $.ajax({
        url: base_url + 'Front_desk/add_enquiry_call',
        type: 'post',
        dataType: 'json',
        data: form.serialize(),
        success: function (data) {
            $(".timeline").html('');
            toastr[data.type](data.message)
            var id = data.data;
            if (data.type === 'success') {
                $('#addenqfollow').trigger('reset');
                abc(id);
            }
        },
        error: function (data) {
            console.log('unable to send request..');
        }
    });
});

$("#edit-addenqCall").on('change', '#select_status', function (e) {
    var status = $(this).val();
    var id = $('#aefr_id').val();
    $.ajax({
        url: base_url + 'Front_desk/update_status_enquiry_call',
        type: 'post',
        dataType: 'json',
        data: {
            id: id,
            status: status
        },
        beforeSend: function () {
            $('#pleasewait').modal('show');
        },
        success: function (data) {
            $('#pleasewait').modal('hide');
            toastr[data.type](data.message)
        },
        error: function (data) {
            console.log('unable to send request..');
        }
    });
});


$(".timeline").on('click', '.delete_addenq_vont', function () {
    var id = $(this).attr('addenq_id');
    var ids = $(this).attr('addenq_ids');
    swal({
        fadeDuration: 1000,
        fadeDelay: 0.50,
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete !'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: base_url + 'Front_desk/delete/admission_enq_followup/id/' + id,
                type: 'post',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function (data) {
                    $(".timeline").html('');
                    if (data.type === "success")
                    {
                        toastr[data.type](data.message);
                        abc(ids);
                    } else if (data.type === "error") {
                        toastr[data.type](data.message);
                    }
                },
                error: function (data) {
                    console.log('unable to send request..');
                }
            });
        }
    });
});


// Admission_enquary End 

// Visitor Add Start

var visiterLists = $('.visiterList').DataTable({
    serverSide: false,
    ajax: base_url + 'front_desk/visiter_list',
    "columns": [
        {"data": "sr_no"},
        {"data": "purpose"},
        {"data": "name"},
        {"data": "contact"},
        {"data": "dates"},
        {"data": "in_time"},
        {"data": "out_time"},
        {"data": "action"}
    ],
    dom: 'Bfrtip',
    buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
    ]
});

$("#addVisitor").on("aftersubmit", function (e, data) {
    $('#pleasewait').modal('hide');
    toastr[data.type](data.message)
    if (data.type === 'success') {
        visiterLists.ajax.url(base_url + "Front_desk/visiter_list").load();
        $(this).trigger('reset');
    }
});

$(".visiterList").on('click', '.delete_visior', function () {
    var id = $(this).attr('visior_id');
    swal({
        fadeDuration: 1000,
        fadeDelay: 0.50,
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete !'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: base_url + 'Front_desk/delete/add_visitors/id/' + id,
                type: 'post',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function (data) {
                    if (data.type === "success")
                    {
                        visiterLists.ajax.url(base_url + "Front_desk/visiter_list").load();
                        toastr[data.type](data.message);
                    } else if (data.type === "error") {
                        toastr[data.type](data.message);
                    }
                },
                error: function (data) {
                    console.log('unable to send request..');
                }
            });
        }
    });
});

// Visitor Add End


// Call Log Add Start

var call_log_List = $('.call_log_List').DataTable({
    serverSide: false,
    ajax: base_url + 'front_desk/call_log_list',
    "columns": [
        {"data": "sr_no"},
        {"data": "name"},
        {"data": "phone"},
        {"data": "dates"},
        {"data": "next_follw_date"},
        {"data": "call_type"},
        {"data": "action"}
    ],
    dom: 'Bfrtip',
    buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
    ]
});

$("#addcalllog").on("aftersubmit", function (e, data) {
    $('#pleasewait').modal('hide');
    toastr[data.type](data.message)
    if (data.type === 'success') {
        call_log_List.ajax.url(base_url + "Front_desk/call_log_list").load();
        $(this).trigger('reset');
    }
});



$(".call_log_List").on('click', '.delete_call', function () {
    var id = $(this).attr('visior_id');
    swal({
        fadeDuration: 1000,
        fadeDelay: 0.50,
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete !'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: base_url + 'Front_desk/delete/add_call_log/id/' + id,
                type: 'post',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function (data) {
                    if (data.type === "success")
                    {
                        call_log_List.ajax.url(base_url + "Front_desk/call_log_List").load();
                        toastr[data.type](data.message);
                    } else if (data.type === "error") {
                        toastr[data.type](data.message);
                    }
                },
                error: function (data) {
                    console.log('unable to send request..');
                }
            });
        }
    });
});






// Call log Add End



// Postal Disptatch  Add Start

var postal_Dispatch_list = $('.Postal_Dispatch_list').DataTable({
    serverSide: false,
    ajax: base_url + 'front_desk/Postal_Dispatch_list',
    "columns": [
        {"data": "sr_no"},
        {"data": "to_title"},
        {"data": "reference"},
        {"data": "from_title"},
        {"data": "dates"},
        {"data": "action"}
    ],
    dom: 'Bfrtip',
    buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
    ]
});
// for adding tostar will open
$("#add_postals").on("aftersubmit", function (e, data) {
    $('#pleasewait').modal('hide');
    toastr[data.type](data.message)
    if (data.type === 'success') {
        postal_Dispatch_list.ajax.url(base_url + "Front_desk/Postal_Dispatch_list").load();
        $(this).trigger('reset');
    }
});



$(".Postal_Dispatch_list").on('click', '.delete_postal', function () {
    var id = $(this).attr('postal_id');
    swal({
        fadeDuration: 1000,
        fadeDelay: 0.50,
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete !'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: base_url + 'Front_desk/delete/add_postal/id/' + id,
                type: 'post',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function (data) {
                    if (data.type === "success")
                    {
                        //for delete tostr will open
                        postal_Dispatch_list.ajax.url(base_url + "Front_desk/Postal_Dispatch_list").load();
                        toastr[data.type](data.message);
                    } else if (data.type === "error") {
                        toastr[data.type](data.message);
                    }
                },
                error: function (data) {
                    console.log('unable to send request..');
                }
            });
        }
    });
});






// postal_dispatch  Add End

// Postal receive Add Start

var postal_Receive_list = $('.Postal_Receive_list').DataTable({
    serverSide: false,
    ajax: base_url + 'front_desk/Postal_Receive_list',
    "columns": [
        {"data": "sr_no"},
        {"data": "from_title"},
        {"data": "reference"},
        {"data": "to_title"},
        {"data": "dates"},
        {"data": "action"}
    ],
    dom: 'Bfrtip',
    buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
    ]
});
//here write form id
$("#addpostalrec").on("aftersubmit", function (e, data) {
    $('#pleasewait').modal('hide');
    toastr[data.type](data.message)
    if (data.type === 'success') {
        postal_Receive_list.ajax.url(base_url + "Front_desk/Postal_Receive_list").load();
        $(this).trigger('reset');
    }
});



$(".Postal_Receive_list").on('click', '.delete_postal_rec', function () {
    var id = $(this).attr('postal_rec_id');
    swal({
        fadeDuration: 1000,
        fadeDelay: 0.50,
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete !'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                //here write Table name
                url: base_url + 'Front_desk/delete/add_postal_receive/id/' + id,
                type: 'post',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function (data) {
                    if (data.type === "success")
                    {
                        //here write var name
                        postal_Receive_list.ajax.url(base_url + "Front_desk/Postal_Receive_list").load();
                        toastr[data.type](data.message);
                    } else if (data.type === "error") {
                        toastr[data.type](data.message);
                    }
                },
                error: function (data) {
                    console.log('unable to send request..');
                }
            });
        }
    });
});






// postal_receive Add End

// build key actions
$(document)
        .keydown(function (e) {
            switch (e.which) {
                case 37: // left
                    console.log('fsdafsa');
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        $('#show-previous-image')
                                .click();
                    }
                    break;

                case 39: // right
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        $('#show-next-image')
                                .click();
                    }
                    break;

                default:
                    return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });



// Gallery Design


let modalId = $('#image-gallery');

$(document)
        .ready(function () {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
                $('#show-previous-image, #show-next-image')
                        .show();
                if (counter_max === counter_current) {
                    $('#show-next-image')
                            .hide();
                } else if (counter_current === 1) {
                    $('#show-previous-image')
                            .hide();
                }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr) {
                let current_image,
                        selector,
                        counter = 0;

                $('#show-next-image, #show-previous-image')
                        .click(function () {
                            if ($(this)
                                    .attr('id') === 'show-previous-image') {
                                current_image--;
                            } else {
                                current_image++;
                            }

                            selector = $('[data-image-id="' + current_image + '"]');
                            updateGallery(selector);
                        });

                function updateGallery(selector) {
                    let $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-title')
                            .text($sel.data('title'));
                    $('#image-gallery-image')
                            .attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }

                if (setIDs == true) {
                    $('[data-image-id]')
                            .each(function () {
                                counter++;
                                $(this)
                                        .attr('data-image-id', counter);
                            });
                }
                $(setClickAttr)
                        .on('click', function () {
                            updateGallery($(this));
                        });
            }
        });





$('.clockpicker').clockpicker();







