 
             
             


<?php
  //  session_start();
  //  $title_page = 'Contato';
 //   require_once 'head.php';
  //  echo '<title> Mrcryo - '  . $title_page .  '</title>';
   // require_once 'header.php';
   // require_once 'menu.php';
          // var_dump(name);
           //verifica se houve post
             if(isset($_POST['email']) && !empty($_POST['email']))
             {               
            //variavies    
                $to = 'wederteixeira@hotmail.com';  
                $nome = $_POST['name'];
                $email = $_POST['email'];  
                $tassunto = $_POST['subject']; //assunto
                $msg = $_POST['message']; //mensagem
                $info = $_SERVER["HTTP_USER_AGENT"]; //informações do pc do cliente
                $ip = getenv('REMOTE_ADDR'); //capta ip do user
                $data = date("d/m/Y H:i:s"); //padrao data                          
                $subject = $tassunto; //assunto do email
                // composicao da mensagem
                $message = '<h1>MENSAGEM DO SITE Mrcryo.com.br</h1> <img src="/img/logo.png"><br>
                           <b>Nome:</b> ' . $nome . ' 
                           <br><b>Data:</b> ' . $data . '<br>' .
                           '<b>E-mail:</b> ' . $email . '<br><br><hr>' .                        
                           '<b>Mensagem:</b><br><br>' . $msg . '<br><br><br><hr>' . 
                           '<b>Identificacao do usuario:<br>
                           ip:</b> ' . $ip . '<br>
                           <b>Navegador:</b> ' . $info;
               
                   
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $headers .= 'To: Weder <wederteixeira@hotmail.com>,' . "\r\n";
                $headers .= 'From: CONTATO SITE MRCRYO <alexandre.ramin@mrcryo.com.br>'."\r\n";
                //$headers .= 'From: CONTATO SITE MRCRYO <weder@perithus.tech>'."\r\n";
                $headers .= 'Reply-To: '.$email."\r\n";                 
                $headers .= 'X-Mailer: PHP/' . phpversion();    
               // $outputform = FALSE;               
                
                              
                                //envia mensagem
                          mail($to, $subject, $message, $headers);
                        
                          //echo '';  
                          //echo "OK";
                          echo '<script type="text/javascript">success(OK);</script>';
                             // echo '<div class="alert alert-success grid_14">
                             //                <button type="button" class="close" data-dismiss="alert">&times;</button>                          
                             //                <h3>Obrigado por nos escrever!</h3>
                             //                <p>Entraremos em contato em breve</p>
                             //                <a href="index.php">Voltar a pagina inicial</a>
                             //            </div>'; 
                              //      //  imprime mensagem enviada com sucesso
                                      // echo '<div class="mb-3"><div class="sent-message">Sua mensagem foi enviada. Obrigado!</div></div>';
                              // }
                        
                             
                              //    else{

                              //         
                              //   }
                               
                             

 
            

 // //imprime mensagem de erro
                               
}

// else { echo '<div class="mb-3"><div class="error-message">Ops, algo deu errado. Tente novamente.</div></div>';
//                         echo '<div class="alert alert-error grid_24 box lifted"><button class="close" data-dismiss="alert" type="button"></button>
//                             <strong>Por favor preencha todos os campos!</strong>
//                         </div>';
      
      
  ?>  

   

