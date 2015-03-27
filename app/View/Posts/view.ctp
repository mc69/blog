<?php if(!isset($post['Post']))
    die();
?>
<article id="post_content" class="" style="color: black;text-align: justify;">
   <header class="">
        <h3><?php echo $post['Post']['libelle']; ?></h3>
        <p>
            <small>Created: <?php echo $post['Post']['date_create']; ?></small>
            <?php echo $this->Html->link('Accueil',array('controller' => 'posts', 'action' => 'index')); ?>
        </p>
    </header>
    
    <div class="post_content">
        <p><?php echo h($post['Post']['content']); ?></p>
        <p>
            
        <pre class='brush: java'>
          package tutorial;
          import com.opensymphony.xwork2.ActionSupport;
          public class HelloWorld extends ActionSupport {
            private String name;
            public String getName() {
            return name;
            }
            public void setName(String name) {
                    this.name = name;
            }
            public String execute() {
                    name = "Hello, " + name + "!"; 
                    return SUCCESS;
            }
          }
          </pre>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/><br/>
        </p>
        <pre class="brush: java;">
            void helloSyntaxHighlighter()
            {
                    System.out.println("hi!");
            }
        </pre>
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/><br/>
        </p>    

    </div><!-- .entry-content -->

    <footer class=""></footer>



</article>