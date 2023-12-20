"use strict";
$(document).ready(function () {
    if ($("#content").length) {
        CKEDITOR.replace("content");
    }

    $("#published_at").daterangepicker({
        opens: "left",
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: "YYYY/MM/DD",
            separator: " - ",
            applyLabel: "اعمال",
            cancelLabel: "انصراف",
            fromLabel: "از",
            toLabel: "تا",
            customRangeLabel: "سفارشی",
            weekLabel: "هف",
            daysOfWeek: ["ی", "د", "س", "چ", "پ", "ج", "ش"],
            monthNames: [
                "ژانویه",
                "فوریه",
                "مارس",
                "آوریل",
                "می",
                "ژوئن",
                "جولای",
                "آگوست",
                "سپتامبر",
                "اکتبر",
                "نوامبر",
                "دسامبر",
            ],
            firstDay: 6,
        },
    });

    $("input[type='checkbox']").change(function () {
        const isChecked = $(this).is(":checked");
        const elementName = $(this).attr("id");
        if (isChecked) {
            $(this).val("1");
            $('input[name="' + elementName + '"]').val("1");
        } else {
            $('input[name="' + elementName + '"]').val("0");
            $(this).val("0");
        }
    });
});
