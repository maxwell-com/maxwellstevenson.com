function start(){

  sjs.open("target",500,400);
  var ball = new sjs.Image("http://maxwellstevenson.com/img/rexton.jpg");
  ball.type = "ball";
  ball.setSize(60,60);
  ball.friction = 0;
  ball.pushUp(10);
  ball.pushRight(3);
  ball.bounce();
  //Ball Object and Properties

//paddle 1 //
var paddle1 = new sjs.Image("http://maxwellstevenson.com/img/rexton.jpg");
paddle1.type = "paddle1";
paddle1.centerH();
paddle1.setSize(60,60);
//paddle2
var paddle2 = new sjs.Image("http://maxwellstevenson.com/img/maxwell.jpg");
paddle2.type = "paddle2";
paddle2.center().bottom();
paddle2.setSize(60,60);
//paddle move
//paddle1
sjs.keyDown(S_KEY, function(){
paddle1.pushRight();
});
sjs.keyDown(A_KEY, function(){
paddle1.pushLeft();



//paddle2
});sjs.keyDown(RIGHT_KEY, function(){
paddle2.pushRight();
});
sjs.keyDown(LEFT_KEY, function(){
paddle2.pushLeft();
});
sjs.keyDown(UP_KEY, function(){
paddle2.pushUp();
});
sjs.keyDown(DOWN_KEY, function(){
paddle2.pushDown();
});
//score
var score = 0;
var score_txt = new sjs.Text("Player1: 0", 21, "pink");
var score1 = 0;
var score1_txt = new sjs.Text("Player2: 0", 21, "green");
score1_txt.right();
//sounds


//bounce

sjs.onHit("ball", "paddle1", function(ball, paddle){
var soundEffect =  new Audio('Music/pop.mp3');
score = score + 1;
soundEffect.play();
score_txt.setText("Player1: "+score);
              sjs.bounceOff(ball, paddle);
          }); 

sjs.onHit("ball", "paddle2", function(ball, paddle){
var soundEffect1 =  new Audio('Music/techno.mp3');
score1 = score1 + 1;
soundEffect1.play();
score1_txt.setText("Player2: "+score1);
              sjs.bounceOff(ball, paddle);
          }); 

} //end start
//Player1: 1156Player2: 27488 hi score
