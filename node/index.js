var io = require('socket.io')(6001)
console.log('connnection tô port 6001')
io.on('error',function(socket){
  console.log('error')
})
io.on('connection',function(socket){
  console.log('conguoi vua ket noi '+ socket.id)
})
var Redis = require('ioredis')
var redis = new Redis(1000)
redis.psubscribe("*",function(error,count){

})

redis.on('pmessage',function(partner,channel,message){
	  // console.log(channel)
	  console.log(message)
	  // console.log(partner)
	  message = JSON.parse(message)
	  io.emit(channel+":"+message.event,message.data.message)
	  console.log('send')
})