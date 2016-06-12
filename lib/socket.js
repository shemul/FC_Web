var socket = io('https://socket-shemul.c9.io:8080');      
// Load initial Data from Mongo

var global_data ;


socket.on('entrance', function(msg){
    global_data = msg;
    var html = '';

    $("#loading").text( "Filtered results " + msg.length);

    for (var i = msg.length - 1; i >= 0; i--) {

        var sticker =""; 
        if(msg[i].f_status=="Available"){
            sticker='<span style ="background-color : #4ea851 ; color:white;padding:5px">AVAILABLE</span>';
        } else if (msg[i].f_status=="Busy") {
            sticker='<span style ="background-color : #f44336 ; color:white;padding:5px">BUSY</span>';                
        } else if(msg[i].f_status=="Gone") {
            sticker='<span style ="background-color : #ff9800 ; color:white;padding:5px">GONE</span>';                
        } else {
          sticker='<span style ="background-color : #3dbec9 ; color:white;padding:5px">'+ (msg[i].f_status)+'</span>'; 
        }


        html+= "<div class='col-xs-12 col-lg-6 hbox-xs' id="+msg[i]._id +">"
            html+="<div class='hbox-column width-2 imageItem'>"
                var path = "http://www.dsinnovators.com/wp-content/uploads/2015/06/DSi-Logo-new.png";
                 html+='<img class="img-circle img-responsive imgView" src="http://fsit.aiub.edu/Files/Uploads/' + msg[i].f_id+ '.jpg"  onError="doSomething(this);" alt="" />'
            html+="</div>"

            html+='<div class="hbox-column v-top">'
              html+="<div class='clearfix'>"
                html+='<div class="col-lg-12 margin-bottom-lg">'
                  html+="<a class='text-lg text-medium' href='#'>"+ msg[i].f_name+ "</a>"
                html+="</div>"
              html+="</dib>"
              html+='<div class="clearfix opacity-75">'
                html+='<div class="col-md-5">'
                  html+='<span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;<a href="#" data-toggle="modal" id="formMod" onClick="editme(this)" data-target="#formModal" > '+ msg[i].f_id + '</a>'
                html+='</div>'
                html+='<div class="col-md-7">'
                  html+='<span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;<a href="#" >' + msg[i].f_email + '</a>'
                html+='</div>'

              html+='</div'
              html+='<div class="clearfix">'
                html+='<div class="col-lg-12">'
                  html+='<span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span>  &nbsp; <a href="#" >'+ msg[i].f_dept +' , ' + msg[i].f_status+'</a></span>'
                html+='</div>'
              html+='</div>'
              html+='<div class="stick-top-right small-padding">'
                html+= sticker;
              html+='</div>'
            html+="</div>"
          html+='</div>'

        html+="</div>";  



    };
    $('#list-results').append(html);

    //var cn = $("#formMod").text();
    //var value = $("#formMod").attr("faculty-id");
    
    // $('#formMod').click(function(){
    //     var parent = val.parentNode.parentNode; 
    //     var id = parent.id;
    //     console.log(id);
    //       // var value = $("#formMod").attr("faculty-id");
    //       //     $("#email1").val(value);
    // });

    

    //console.log(cn);

});



function getObjects(obj, key, val) {
    var objects = [];
    for (var i in obj) {
        if (!obj.hasOwnProperty(i)) continue;
        if (typeof obj[i] == 'object') {
            objects = objects.concat(getObjects(obj[i], key, val));
        } else if (i == key && obj[key] == val) {
            objects.push(obj);
        }
    }
    return objects;
}

function image_error () {
  console.log('21312');
}

function editme (val) {
      // body...
      var parent = val.parentNode.parentNode.parentNode.parentNode.parentNode; 
      var id = parent.id;


      var data = getObjects(global_data, "_id" , id);
      var data = data[0];
      
      //console.log(data);
      $("#db_id_u").val(data._id);
      $("#f_name_u").val(data.f_name);
      $("#f_id_u").val(data.f_id);
      $("#f_dept_u").val(data.f_dept);
      $("#f_email_u").val(data.f_email);
      $("#f_phone_u").val(data.f_phone);  

      $("#f_type_u").val(data.f_type);  
      $("#f_campus_u").val(data.f_campus);  
      $("#f_floor_u").val(data.f_floor);  
      $("#f_room_u").val(data.f_room);
      $("#f_other_u").val(data.f_others);

      $("#f_base_u").val(data.f_ssid);  
      $("#f_o_m_u").val(data.f_own_mac);
      $("#f_o_i_u").val(data.f_imei);

      $("#f_sch_n_u").val(data.f_sch_name);  
      $("#f_sch_d_u").val(data.f_sch_day);
      $("#f_sch_s_u").val(data.f_sch_start);
      $("#f_sch_e_u").val(data.f_sch_end);
      $("#f_status_u").val(data.f_status);

      $("#full_tsf").html(JSON.stringify(data.full_tsf, undefined, 5));
      //$("#gate").val('Floor');
      console.log(data);

      
}




// Lisen socket if there any new item
socket.on('item', function(msg2){

    var sticker =""; 

    /*
      17-05-2016
      Sticker sign for faculty status
      A Led will indicate weather the faculty available or not.

    if(msg2.msg.f_status=="Available"){
        sticker='<i class="fa fa-circle fa-fw text-success" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i>';
    } else if (msg2.msg.f_status=="Busy") {
        sticker='<i class="fa fa-circle fa-fw text-danger" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i>';                
    } else if(msg2.msg.f_status=="Gone") {
        sticker='<i class="fa fa-circle fa-fw text-warning" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i>';                
    }
    */
    
    if(msg2.msg.f_status=="Available"){
            sticker='<span style ="background-color : #4ea851 ; color:white;padding:5px">AVAILABLE</span>';
    } else if (msg[i].f_status=="Busy") {
        sticker='<span style ="background-color : #f44336 ; color:white;padding:5px">BUSY</span>';                
    } else if(msg[i].f_status=="Gone") {
        sticker='<span style ="background-color : #ff9800 ; color:white;padding:5px">GONE</span>';                
    } else {
      sticker='<span style ="background-color : #3dbec9 ; color:white;padding:5px">'+(msg2.msg.f_status)+'</span>'; 
    }

    var html="";
    html+= "<div class='col-xs-12 col-lg-6 hbox-xs' id="+msg2.msg._id +">"
        html+="<div class='hbox-column width-2 imageItem'>"
             html+="<img class='img-circle img-responsive imgView' src='http://fsit.aiub.edu/Files/Uploads/"+msg2.msg.f_id +".jpg' height='140' width='140' onError='doSomething(this);' alt='' />"
        html+="</div>"

        html+="<div class='hbox-column v-top'>"
          html+="<div class='clearfix'>"
            html+='<div class="col-lg-12 margin-bottom-lg">'
              html+='<a class="text-lg text-medium" href="#">'+ msg2.msg.f_name+ '</a>'
            html+="</div>"
          html+="</dib>"
          html+='<div class="clearfix opacity-75">'
            html+='<div class="col-md-5">'
              html+='<span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;<a href="#" data-toggle="modal" id="formMod" onClick="editme(this)" data-target="#formModal" > '+ msg2.msg.f_id
            html+='</div>'
            html+='<div class="col-md-7">'
              html+='<span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;'+ msg2.msg.f_email
            html+='</div>'

          html+='</div'
          html+='<div class="clearfix">'
            html+='<div class="col-lg-12">'
              html+='<span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span><a href="#" >'+ msg2.msg.f_dept +' , ' + msg2.msg.f_status+'</a>'
            html+='</div>'
          html+='</div>'
          html+='<div class="stick-top-right small-padding">'
            html+= sticker;
          html+='</div>'

        html+="</div>"
      html+='</div>'

    html+="</div>";                

$('#list-results').append(html);           

});


// Update table if any item get deleted
socket.on('removeThis', function (data) {
   console.log("I am delted");
   var id = data.id;
   $("div#"+id).remove(); // remove table row for this item id 
}); 


// Update table if any item get changed or updated
socket.on('update', function (data) {

  console.log('updates');
  var item = data.item;
  var obj = item[0];

  var id = obj[0]._id;
  var f_id = obj[0].f_id;
  var f_name = obj[0].f_name;
  var f_dept = obj[0].f_dept;
  var f_imei = obj[0].f_imei;
  var f_ssid = obj[0].f_ssid;
  var f_email = obj[0].f_email;
  var f_routine = obj[0].f_routine;
  var f_status = obj[0].f_status;
  
  
  $("div#"+id+" div.hbox-column.v-top > div > div.col-lg-12.margin-bottom-lg > a").text(f_name);
  $("div#"+id+" div.hbox-column.v-top > div > div.clearfix.opacity-75 > div.col-md-5 > a").text(f_id);
  $("div#"+id+" div.hbox-column.v-top > div > div.clearfix.opacity-75 > div.col-md-7 > a").text(f_email);  
  $("div#"+id+" div.hbox-column.v-top > div > div.clearfix.opacity-75 > div.col-lg-12 > span > a").text(f_dept + " , " + f_status );  

  if(f_status == "Available") {
    $("div#"+id+" div.hbox-column.v-top > div > div.stick-top-right.small-padding").html('<span style ="background-color : #4ea851 ; color:white;padding:5px">AVAILABLE</span>'); 
  } else if(f_status=="Busy") {
    $("div#"+id+" div.hbox-column.v-top > div > div.stick-top-right.small-padding").html('<span style ="background-color : #f44336 ; color:white;padding:5px">BUSY</span>'); 
  } else if(f_status=="Gone") {
    $("div#"+id+" div.hbox-column.v-top > div > div.stick-top-right.small-padding").html('background-color : #ff9800 ; color:white;padding:5px">GONE</span>'); 
  } else {
    $("div#"+id+" div.hbox-column.v-top > div > div.stick-top-right.small-padding").html('<span style ="background-color : #3dbec9 ; color:white;padding:5px">'+f_status +'</span>'); 

  }

});