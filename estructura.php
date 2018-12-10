<?php
 $nombre = 'Robert Mendoza';
 

 $jobs = [
   'PHP Developer',
   'Python Dev',
   'devops'
 ];


 var_dump($nombre);
 var_dump($jobs);
?>

<?php
              $experience = 0;
              do {
                  if ($i < 5) {
                    echo '<li class="work-position">';
                    echo '<h5>' .$jobs[$experience]. '</h5>';
                    echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p>";
                    echo '<strong>Achievements:</strong>';
                    echo '<ul>';
                    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
                    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
                    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
                    echo '</ul>';
                    echo '</li>';
                  
                  $experience = $experience +1;
                }
              } while ($experience <3);
            ?>