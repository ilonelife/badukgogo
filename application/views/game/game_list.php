<html>
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
                rel="stylesheet">
                <script
                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
                <style>
                    body {
                        background-color: bisque;
                        display: flex;
                        text-align: center;
                        /* max-width: 400px; */
                        display: flex;
                        flex-direction:column;
                        /* overflow: hidden; */
                        border-radius: 2rem;
                        box-shadow: 0px 1rem 1.5rem rgba(0,0,0,0.5);
                        /* margin: 0 auto; */
                        
                    }
                    .hc{
                        left: 0;
                        right: 0;
                        margin-left: auto;
                        margin-right: auto;
                    }

                    .vc{
                        top: 0;
                        bottom: 0;
                        margin-top: auto;
                        margin-bottom: auto;
                    }

                    form {
                        position: absolute;
                        display: flex;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                    }
                    .progressbar {
                        position: fixed;
                        width: 100%;
                        height: 20px;
                        background-color: rgb(62,28,29);
                      }
                      .progress{
                        width: 0;
                        height: 100%;
                        background-color: rgb(255, 231, 10);
                        transition: width 1s linear 0s;
                      }

                </style>
            </head>
            <body class="hc vc"> 
            <div class="progressbar">
            <div class="progress"> </div>
            </div>
            <table class="table table-bordered" id="hc vc"  style="border: hidden;">

             
            <br/>
            <br/>
            
            <h1>?????????</h1>  <br /><br />
            <h2><?php echo $profile['nick'].'???'.' '.$profile['win'].'??? '.$profile['lose']?>???</h2>
            <a href="/index.php/game/create">????????????</a>
            
            
  
    <thead>
        <tr>
        <th>????????????</th>
        <th>?????????</th>
        <th>????????????</th>
      </tr>
    </thead>

    <tbody>

<?php
foreach($board_list as $row)
{ 

  if ($row['status'] == 0) {
    $row['status'] = '<font color=\'blue\'>??????</font>';
    $row['button_label'] = '????????????';
    
  }
  else if($row['status'] == 1) {
    $row['status'] = '<font color=\'green\'>??????</font>';
    $row['button_label'] = '????????????';
  }
  else if($row['status'] == 2) {
    $row['status'] = '<font color=\'red\'>??????</font>';
    $row['button_label'] = '????????????';
  }
?>

      <tr>
        <td><?php echo $row['status']?></td>
        <td><?php echo $row['title']?></td>
        <td><a href="/index.php/game/enter?board_id=<?php echo $row['_id']?>"><?php echo $row['button_label']?></a></td>
      </tr>

<?php
}
?>

                </tbody>

              </table>
           <!-- ?????? -->
           
            </form>
          </table>
       </body>

       <script>
         window.addEventListener('scroll',function(){
          var bodyEl = document.querySelector('body');
          var bodyHeight = bodyEl.offsetHeight;
          var scrollable = bodyHeight - window.innerHeight;
          var progressEl = document.querySelector('.progress');
          var per = Math.floor(window.scrollY / scrollable * 100) + '%';
          progressEl.style.width = per;
        });
        </script>
        
</html>