<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /ict/ - Informatica
        </title>

        <style>            
            #navbar{
                border: double brown;
            } 

            #main{
                border: double brown;
            }                 

            #threadForm{
                border: double brown;
            }

            .post{
                border: double brown;
            }  

            .OP{
                border: double brown;
            }          
        </style>
    </head>

    <body>
        <?php require APPROOT . '/view/include/header.php'; ?>
        <br>

        <div id="content">
            <?php require APPROOT . '/view/include/nav.php'; ?>

            <section id="main">

                <h1 id="boardTitle"><?php echo $data['title']; ?></h1>

                <br>

                <?php require APPROOT . '/view/include/threadForm.php'; ?>

                <?php 
                    //var_dump($data['threads']);
                    foreach($data['threads'] as $thread){
                        echo '
                        <div class="thread"> 
                            <div class="OP" class="post">
                                <img class="image" alt="image" src="'.URLROOT.'/img/threads/'.$thread->getImgUrl().'"></img>
                                <span class="opHeader" class="postId">' . $thread->getThreadId() .'<span>
                                <span class="opHeader" class="postSubject">' . $thread->getSubject() . '<span>
                                <span class="opHeader" class="posterName">' . $thread->getStudentNumber() . '</span>
                                <span class="opHeader" class="postDateTime">' . $thread->getTimeCreated() . '</span>
                                <a class="opHeader" class="viewThread" href="">View</a>
                                <br>
                                <p>' . $thread->getComment() . '</p>
                            </div>
                        </div>
                        ';
                    }
                ?>

            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>