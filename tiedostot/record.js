/**
 * Functions and event handlers specific to record pages.
 */
$(document).ready(function(){
    // register the record comment form to be submitted via AJAX
    registerAjaxCommentRecord();

    // bind click action to export record menu
    $('a.exportMenu').click(function(){
        toggleMenu('exportMenu');
        return false;
    });

    // bind click action on toolbar links
    $('a.citeRecord').click(function() {
        var id = this.id.substr('citeRecord'.length);
        var $dialog = getLightbox('Record', 'Cite', id, null, this.title);
        return false;
    });
    $('a.smsRecord').click(function() {
        var id = this.id.substr('smsRecord'.length);
        var module = 'Record';
        if ($(this).hasClass('smsSummon')) {
            module = 'Summon';
        } else if ($(this).hasClass('smsWorldCat')) {
            module = 'WorldCat';
        }
        var $dialog = getLightbox(module, 'SMS', id, null, this.title);
        return false;
    });
    $('#addThis a.mail, a.mailRecord').click(function() {
        var id = this.id.substr('mailRecord'.length);
        var module = 'Record';
        if ($(this).hasClass('mailSummon')) {
            module = 'Summon';
        } else if ($(this).hasClass('mailWorldCat')) {
            module = 'WorldCat';
        }
        var $dialog = getLightbox(module, 'Email', id, null, this.title);
        return false;
    });
    $('a.feedbackRecord').click(function() {
        var id = this.id.substr('feedbackRecord'.length);
        var $dialog = getLightbox('Record', 'Feedback', id, null, this.title);
        return false;
    });
    $('a.tagRecord').click(function() {
        var id = this.id.substr('tagRecord'.length);
        var $dialog = getLightbox('Record', 'AddTag', id, null, this.title, 'Record', 'AddTag', id);
        return false;
    });
    $('a.deleteRecordComment').click(function() {
        var commentId = this.id.substr('recordComment'.length);
        var recordId = this.href.match(/\/Record\/([^\/]+)\//)[1];
        deleteRecordComment(recordId, commentId);
        return false;
    });
    
    // add highlighting to subject headings when mouseover
    $('a.subjectHeading').mouseover(function() {
        var subjectHeadings = $(this).parent().children('a.subjectHeading');
        for(var i = 0; i < subjectHeadings.length; i++) {
            $(subjectHeadings[i]).addClass('highlight');
            if ($(this).text() == $(subjectHeadings[i]).text()) {
                break;
            }
        }
    });
    $('a.subjectHeading').mouseout(function() {
        $('.subjectHeading').removeClass('highlight');
    });

    $('.similarItems').each(function() {
        var id = this.id.substr('similarItems'.length);
        $(this).load(path + '/AJAX/AJAX_SimilarItems', {id: id}, function(response, status, xhr) {
            if (status != 'success') {
                $(this).text('Failed to load similar items');
            }
        });
    });
    
    setUpCheckRequest();
    setUpCheckCallSlipRequest();
    setUpCheckUBRequest();
    setUpUBRequestForm();
});

function setUpCheckRequest() {
    $('.checkRequest').each(function(i) {
        if($(this).hasClass('checkRequest')) {
            $(this).addClass('ajax_hold_availability');
        }
    });
    
    $('.checkRequest').each(function(i) {
        if($(this).hasClass('checkRequest')) {
            var isValid = checkRequestIsValid(this, this.href);
        }
    });
}

function checkRequestIsValid(element, requestURL) {
    var recordId = requestURL.match(/\/Record\/([^\/]+)\//)[1];
    var vars = {}, hash;
    var hashes = requestURL.slice(requestURL.indexOf('?') + 1).split('&');

    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        var x = hash[0];
        var y = hash[1]
        vars[x] = y;
    }
    vars['id'] = recordId;
    
    var url = path + '/AJAX/JSON?' + $.param({method:'checkRequestIsValid', id: recordId, data: vars});
    $.ajax({
        dataType: 'json',
        cache: false,
        url: url,
        success: function(response) {
            if (response.status == 'OK') {
                if (response.data.status) {
                    $(element).removeClass('checkRequest ajax_hold_availability').html(response.data.msg);
                } else {
                    $(element).remove();
                }
            } else if (response.status == 'NEED_AUTH') {
                $(element).replaceWith('<span class="holdBlocked">' + response.data.msg + '</span>');
            }
        }
    });   
}

function setUpCheckCallSlipRequest() {
    $('.checkCallSlipRequest').each(function(i) {
        if($(this).hasClass('checkCallSlipRequest')) {
            $(this).addClass('ajax_call_slip_availability');
        }
    });
    
    $('.checkCallSlipRequest').each(function(i) {
        if($(this).hasClass('checkCallSlipRequest')) {
            var isValid = checkCallSlipRequestIsValid(this, this.href);
        }
    });
}

function checkCallSlipRequestIsValid(element, requestURL) {
    var recordId = requestURL.match(/\/Record\/([^\/]+)\//)[1];
    var vars = {}, hash;
    var hashes = requestURL.slice(requestURL.indexOf('?') + 1).split('&');

    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        var x = hash[0];
        var y = hash[1]
        vars[x] = y;
    }
    vars['id'] = recordId;
    
    var url = path + '/AJAX/JSON_CallSlip?' + $.param({method:'checkRequestIsValid', id: recordId, data: vars});
    $.ajax({
        dataType: 'json',
        cache: false,
        url: url,
        success: function(response) {
            if (response.status == 'OK') {
                if (response.data.status) {
                    $(element).removeClass('checkCallSlipRequest ajax_call_slip_availability').html(response.data.msg);
                } else {
                    $(element).remove();
                }
            } else if (response.status == 'NEED_AUTH') {
                $(element).replaceWith('<span class="callSlipBlocked">' + response.data.msg + '</span>');
            }
        }
    });   
}

function setUpCheckUBRequest() {
    $('.checkUBRequest').each(function(i) {
        if($(this).hasClass('checkUBRequest')) {
            $(this).addClass('ajax_ub_request_availability');
        }
    });
    
    $('.checkUBRequest').each(function(i) {
        if($(this).hasClass('checkUBRequest')) {
            var isValid = checkUBRequestIsValid(this, this.href);
        }
    });
}

function checkUBRequestIsValid(element, requestURL) {
    var recordId = requestURL.match(/\/Record\/([^\/]+)\//)[1];
    var vars = {}, hash;
    var hashes = requestURL.slice(requestURL.indexOf('?') + 1).split('&');

    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        var x = hash[0];
        var y = hash[1]
        vars[x] = y;
    }
    vars['id'] = recordId;
    
    var url = path + '/AJAX/JSON_UBRequest?' + $.param({method:'checkRequestIsValid', id: recordId, data: vars});
    $.ajax({
        dataType: 'json',
        cache: false,
        url: url,
        success: function(response) {
            if (response.status == 'OK') {
                if (response.data.options) {
                    $(element).removeClass('checkUBRequest ajax_ub_request_availability').html(response.data.msg);
                } else {
                    $(element).remove();
                }
            } else if (response.status == 'NEED_AUTH') {
                $(element).replaceWith('<span class="UBRequestBlocked">' + response.data.msg + '</span>');
            }
        }
    });   
}

function setUpUBRequestForm() {
    $("#pickupLibrary").change(function() {
        $("#pickupLocation option").remove();
        $("#pickupLocationLabel").addClass("ajax_ub_request_loading");
        var recordId = location.href.match(/\/Record\/([^\/]+)\//)[1];
        var url = path + '/AJAX/JSON_UBRequest?' + $.param({method:'getPickupLocations', id: recordId, pickupLib: $("#pickupLibrary").val() });
        $.ajax({
            dataType: 'json',
            cache: false,
            url: url,
            success: function(response) {
                if (response.status == 'OK') {
                    $.each(response.data.locations, function() {
                        var option = $("<option></option>").attr("value", this.id).text(this.name);
                        if (this.isDefault) {
                            option.attr("selected", "selected");
                        }
                        $("#pickupLocation").append(option);
                    });
                }
                $("#pickupLocationLabel").removeClass("ajax_ub_request_loading");
            },
            fail: function() {
                $("#pickupLocationLabel").removeClass("ajax_ub_request_loading");
            }
        });   
        
    });
    $("#pickupLibrary").change();
}

function registerAjaxCommentRecord() {
    $('form[name="commentRecord"]').live('submit', function(){
        if (!$(this).valid()) { return false; }
        var form = this;
        var id = form.id.value;
        var url = path + '/AJAX/JSON?' + $.param({method:'commentRecord',id:id});
        $(form).ajaxSubmit({
            url: url,
            dataType: 'json',
            success: function(response, statusText, xhr, $form) {
                if (response.status == 'OK') {
                    refreshCommentList(id);
                    $(form).resetForm();
                } else if (response.status == 'NEED_AUTH') {
                    $dialog = getLightbox('AJAX', 'Login', id, null, 'Login');
                    $dialog.dialog({
                        close: function(event, ui) {
                            // login dialog is closed, check to see if we can proceed with followup
                            if (__dialogHandle.processFollowup) {
                                 // trigger the submit event on the comment form again
                                 $(form).trigger('submit');
                            }
                        }
                    });
                } else {
                    displayFormError($form, response.data);
                }
            }
        });
        return false;
    });
}

function refreshCommentList(recordId) {
    var url = path + '/AJAX/JSON?' + $.param({method:'getRecordCommentsAsHTML',id:recordId});
    $.ajax({
        dataType: 'json',
        url: url,
        success: function(response) {
            
            if (response.status == 'OK') {
                commentUl = 'ul[id="commentList'+ recordId + '"]';
                $(commentUl).empty();
                $(commentUl).append(response.data);
                $(commentUl + ' a.deleteRecordComment').unbind('click').click(function() {
                    var commentId = $(this).attr('id').substr('recordComment'.length);
                    deleteRecordComment(recordId, commentId);
                    return false;
                });
            }
        }
    });
}

function deleteRecordComment(recordId,commentId) {
    var url = path + '/AJAX/JSON?' + $.param({method:'deleteRecordComment',id:commentId});
    $.ajax({
        dataType: 'json',
        url: url,
        success: function(response) {
            if (response.status == 'OK') {
                refreshCommentList(recordId);
            }
        }
    });
}
