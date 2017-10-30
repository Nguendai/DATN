<div id="tiishop_contact-us">
    <div id="contact-us-nav">
        <p href="#" class="__click m-font"><i class="fa fa-question-circle-o mr-5 fz-16"></i><span>Hộ trợ</span> </p>
    </div>
    <div id="contact-us-main">
        <div class="panel-heading clearfix __close text-center"><span class="fz-16 mt-5">Can you write message</span><a href="" class="pull-right"><i style="font-size: 18px;padding: 10px 2px 0px 0px;color: gray;" class="fa fa-times" aria-hidden="true"></i></a></div>
        @if(Auth::guest())
        <div class="__inner-main clearfix">
            <form action="{!! url('contact-us') !!}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <p>Name</p>
                    <input type="text" name="txtname" class="form-control" required placeholder="Please, Your Name" />
                </div>
                <div class="form-group">
                    <p>Email</p>
                    <input type="email" name="txtemail" class="form-control" placeholder="Please, Your Mail" required />
                </div>
                <div class="form-group">
                    <p>Messages</p>
                    <textarea name="txttext"  cols="30" rows="10"  placeholder="Can I help you?" class="form-control" required ></textarea>
                </div>
                <button class="btn btn-primary pull-right" data-toggle="tooltip" title="Send!">Gửi</button>
            </form>
        </div>
        @else
        <div class="__inner-main clearfix">
            <div id="messages" style="width: 100%;height: 116px;overflow-y: auto;">
                @foreach($messages as $data)
                <p id="{{$data->id}}">
                    <strong >{{$data->author}}
                    </strong>:{{$data->content}}
                </p>
                @endforeach
            </div>
            <hr>
            <!-- <form action="" method="post"> -->

               <div class="form-group">
                <p>Messages</p>
                <textarea name="content" id="content" cols="30" rows="1"  placeholder="Can I help you?" class="form-control" required ></textarea>
            </div>
            <button id="send" class="btn btn-primary pull-right">Gửi</button>
            <!-- </form> -->
        </div>
        @section('script')
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
                  var url = 'khachhang/send/{{Auth::user()->id}}';
                  var content = $('#content').val();
                  if(content == ''){
                    alert('mời bạn nhập nội dung');
                  }else{
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
                  }
                });

            });
        </script>
        @endsection
        @endif
    </div>
</div>
