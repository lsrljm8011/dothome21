<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/vars.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <!-- cardType01 -->
                <section class="cardType">
                    <div class="cardType01">
                        <h2>a wise serin’s life</h2>
                        <p>-- 사진 기록 사이트 -- 제가 찍고 보정한 일상, 여행, 풍경 등 여러가지 사진과 내용을 기록하는 사이트입니다.</p>
                        <div class="card-wrap">
                            <div class="card">
                                <a href="#">
                                    <img src="../assets/img/card01.jpg" alt="러시아 여행 사진 관련 이미지입니다." class="card-img">
                                    <strong class="card-title">러시아 여행 사진</strong>
                                    <span class="card-desc">2019.11.17 ~ 2019.11.19 러시아 블라디보스톡에서 찍은 사진입니다.</span>
                                    <span class="card-keyword">
                                        <span>#여행</span>
                                        <span>#러시아</span>
                                        <span>#블라디보스톡</span>
                                    </span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="../assets/img/card02.jpg" alt="싱가포르 여행 사진 관련 이미지입니다." class="card-img">
                                    <strong class="card-title">싱가포르 여행 사진</strong>
                                    <span class="card-desc">2018.09.06 ~ 2018.09.09 싱가포르에서 찍은 사진입니다.</span>
                                    <span class="card-keyword">
                                        <span>#여행</span>
                                        <span>#싱가포르</span>
                                    </span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="../assets/img/card03.jpg" alt="일본 여행 사진 관련 이미지입니다." class="card-img">
                                    <strong class="card-title">일본 여행 사진</strong>
                                    <span class="card-desc">2019.05.10 ~ 2019.05.12 일본 오사카에서 찍은 사진입니다.</span>
                                    <span class="card-keyword">
                                        <span>#여행</span>
                                        <span>#일본</span>
                                        <span>#오사카</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- //cardType01 -->

            </article>
            <article class="flow-article">  <!-- article, section에는 제목 필수!-->
                <h3 class="ir_so"> 사진 구경하기</h3>
                <section id="comment" class="section-comment">
                    <h4>댓글 남기기</h4>
                    <p>댓글을 남겨주세요!</p> 
                    <div class="comment-form">
                        <form action="commentSave.php" method="post" name="comment">
                            <fieldset>
                                <legend class="ir_so">댓글영역</legend>
                                <div class="comment-wrap">
                                    <div>
                                        <label for="youName" class="ir_so">이름</label>
                                        <input type="text" name="youName" id="youName" class="input_write2" placeHolder="이름" autocomplete="off" maxlength="10" reuquired>    
                                    </div>
                                    <div>
                                        <label for="youText" class="ir_so">댓글</label>
                                        <input type="text" name="youText" id="youText" class="input_write2 w100" placeHolder="댓글을 적어주세요." autocomplete="off" reuquired>    
                                    </div>
                                    <button class="btn_submit2" type="submit" value="댓글남기기">작성</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <?php
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment LIMIT 10";
                            $result = $connect -> query($sql);

                            // echo "<pre>";
                            // var_dump(mysqli_fetch_array($result));
                            // echo "</pre>";

                            while($info = mysqli_fetch_array($result)){
                        ?>
                            <div>
                            <p><?=$info['youText']?></p>
                                <div>
                                    <img src="http://lsrljm8011.dothome.co.kr/site/img/img-card04.jpg" alt="">
                                    <span><?=$info['youName']?></span>
                                    <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                </div>
                            </div>
                        <?php
                            }
                        ?>



                        <!-- <div>
                            <p>저도 여행가고싶어요!</p>
                            <div>
                                <img src="http://lsrljm8011.dothome.co.kr/site/img/img-card04.jpg" alt="">
                                <span>serin</span>
                                <span>2021-09-16</span>
                            </div>
                        </div> -->
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        footer
    </footer>
    <!-- //foter -->
</body>
</html>