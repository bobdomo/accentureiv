//$(document).ready(function(){


function mydata(){
  var accessurl = "http://localhost/ucustoms/rest/api/index.php?interface=selectcompany";
  alert(accessurl);

  JSONP(accessurl,function(data){
    $.each(data,function(i,val){
      var html=
                    "<td>" + val['name'] + "</td>" +
                    "<td>" + val['address'] + "</td>" +
                    "<td>" + val['state'] + "</td>" +
                    "<td>" + val['type'] + "</td>" +
                    "<td>" + val['offceno'] + "</td>" +
                    "<td>" + val['faxno'] + "</td>" +
                    "<td>" + val['pic'] + "</td>" +
                    "<td>" + val['hpno'] + "</td>" +
                    "<td>" + val['email'] + "</td>" +
                    "<td>" + val['status'] + "</td>" +
                    "<td>" + val['date'] + "</td>" +
                    "<td>" + val['action'] + "</td>" +
                ;
      alert(val['name']);
      // HTML Code for Creatin table
    //document.getElementById('list').innerHTML= html;
    })


  })
}
