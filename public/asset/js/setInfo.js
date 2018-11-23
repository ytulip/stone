$(function () {
    $.get("/qlygw/companyInfo.json",function (data) {
        $(".ygabah").html(data.ygabah);
        $(".jkyxgg").html(data.jkyxgg);
        $(".wcnzs").html(data.wcnzs);
        $(".companyName").html(data.name);
        $(".icp").html(data.icp);
        $(".address").html(data.address);
        $(".phone").html(data.phone);
        $(".email").html(data.email);
        $(".httpUrl").html(data.httpUrl);
    });
});