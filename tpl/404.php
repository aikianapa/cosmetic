<!DOCTYPE html>
<html>
<wb-include wb-tpl="wrapper.inc.php" />

<wb-jq wb-html="main">
    
    <!--error section area start-->
    <div class="error_section">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="error_form" wb-if='"{{_sess.lang}}"=="en"'>
                        <h1>404</h1>
                        <h2>Opps! PAGE NOT BE FOUND</h2>
                        <p>Sorry but the page you are looking for does not exist, have been<br> removed, name changed or is temporarily unavailable.</p>
                        <form action="404.html#">
                            <input placeholder="Search..." type="text">
                            <button type="submit"><i class="icon-magnifier icons"></i></button>
                        </form>
                        <a href="index.html">Back to home page</a>
                    </div>
                    <div class="error_form" wb-if='"{{_sess.lang}}"=="ru"'>
                        <h1>404</h1>
                        <h2>Упс! СТРАНИЦА НЕ НАЙДЕНА</h2>
                        <p>Извините, страница не доступна по причине<br> удаления, переименования или временной заблокировки.</p>
                        <form action="#">
                            <input placeholder="Поиск..." type="text">
                            <button type="submit"><i class="icon-magnifier icons"></i></button>
                        </form>
                        <a href="/">Венуться на главную</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--error section area end--> 
</wb-jq>   
