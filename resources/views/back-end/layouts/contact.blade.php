<div id="tiishop_contact-us">
    <div id="contact-us-nav">
        <a href="#" class="__click m-font"><i class="fa fa-question-circle-o mr-5 fz-16"></i><span>Hỗ trợ</span> </a>
    </div>
    <div id="contact-us-main">
        <div class="panel-heading clearfix __close text-center"><span class="fz-16 mt-5">KH : <i id="name_kh" ></i></span><a href="" class="pull-right"><i class="fa fa-times-rectangle fz-16"></i></a></div>
        <div class="__inner-main clearfix">
            <!-- <form action="{!! url('contact-us') !!}" method="post"> -->
                {{csrf_field()}}
                <div id="messages" style="width: 100%;height: 120px;overflow-y: auto;" >

                </div>
                <p type="text" hidden id-group="" id="group_id"></p>
                <div class="form-group">
                    <p>Nội dung tin nhắn</p>
                    <textarea name="content" id="content" cols="30" rows="1"  placeholder="Bạn cần trợ giúp gì?" class="form-control" required ></textarea>
                </div>
                <button id="send" class="btn btn-primary pull-right">GỬI</button>
                <!-- </form> -->
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js" ></script>
    <script  type="text/javascript">
        var socket = io('http://localhost:6001');
        socket.on('chat:message',function(data){
            if($('#'+data.id).length == 0){
                $('#messages').append('<p><strong>'+data.author+'</strong>:'+data.content+'</p>');
            }else{
                console.log('da co tin nhắn');
            }
        })
        $(document).ready(function(){

            $('#send').click(function(){
                var a = $('#group_id').attr('id-group');
                var url = 'send/'+a;

                var content = $('#content').val();
                $.ajax({
                    url: url,
                    data: {
                      content:content,
                  },
                  dataType: 'text',
                  type:'POST',
                  success: function(response){
                    var data = JSON.parse(response);
                    $('#content').val('');
                }
            });
            });
        });
    </script>
