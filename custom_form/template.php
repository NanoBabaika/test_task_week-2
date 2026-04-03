<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

// Вывод ошибок формы
if ($arResult["isFormErrors"] == "Y") {
    echo $arResult["FORM_ERRORS_TEXT"];
}

// Сообщение об успешной отправке
if ($arResult["isFormNote"] == "Y") {
    echo $arResult["FORM_NOTE"];
}

if ($arResult["isFormNote"] != "Y") :
?>
<form class="contact-form__form" action="<?= htmlspecialchars(POST_FORM_ACTION_URI) ?>" method="POST">
    <?= bitrix_sessid_post() ?>
    <input type="hidden" name="WEB_FORM_ID" value="<?= (int)$arParams["WEB_FORM_ID"] ?>">

    <div class="contact-form__head">
        <div class="contact-form__head-title">Связаться</div>
        <div class="contact-form__head-text">
            Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом ваших требований
        </div>
    </div>

    <div class="contact-form__form-inputs">
        <!-- Колонка 1 -->
        <div class="contact-form__column">
            <!-- Поле "Имя" -->
            <div class="input contact-form__input">
                <label class="input__label">
                    <div class="input__label-text">
                        <?= htmlspecialchars($arResult["QUESTIONS"]["SIMPLE_QUESTION_733"]["CAPTION"]) ?>
                        <?= ($arResult["QUESTIONS"]["SIMPLE_QUESTION_733"]["REQUIRED"] == "Y") ? "*" : "" ?>
                    </div>
                    <?php
                    $input = $arResult["QUESTIONS"]["SIMPLE_QUESTION_733"]["HTML_CODE"];
                    $input = str_replace('class="inputtext"', 'class="input__input"', $input);
                    echo $input;
                    ?>
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                </label>
            </div>

            <!-- Поле "Должность" -->
            <div class="input contact-form__input">
                <label class="input__label">
                    <div class="input__label-text">
                        <?= htmlspecialchars($arResult["QUESTIONS"]["SIMPLE_QUESTION_957"]["CAPTION"]) ?>
                        <?= ($arResult["QUESTIONS"]["SIMPLE_QUESTION_957"]["REQUIRED"] == "Y") ? "*" : "" ?>
                    </div>
                    <?php
                    $input = $arResult["QUESTIONS"]["SIMPLE_QUESTION_957"]["HTML_CODE"];
                    $input = str_replace('class="inputtext"', 'class="input__input"', $input);
                    echo $input;
                    ?>
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                </label>
            </div>
        </div>

        <!-- Колонка 2 -->
        <div class="contact-form__column">
            <!-- Поле "Email" -->
            <div class="input contact-form__input">
                <label class="input__label">
                    <div class="input__label-text">
                        <?php
                        $caption = str_replace(['<br>', '<br />', '<br/>'], ' ', $arResult["QUESTIONS"]["SIMPLE_QUESTION_496"]["CAPTION"]);
                        echo htmlspecialchars($caption);
                        ?>
                        <?= ($arResult["QUESTIONS"]["SIMPLE_QUESTION_496"]["REQUIRED"] == "Y") ? "*" : "" ?>
                    </div>
                    <?php
                    $input = $arResult["QUESTIONS"]["SIMPLE_QUESTION_496"]["HTML_CODE"];
                    $input = str_replace('class="inputtext"', 'class="input__input"', $input);
                    echo $input;
                    ?>
                    <div class="input__notification">Неверный формат почты</div>
                </label>
            </div>

            <!-- Поле "Телефон" -->
            <div class="input contact-form__input">
                <label class="input__label">
                    <div class="input__label-text">
                        <?php
                        $caption = str_replace(['<br>', '<br />', '<br/>'], ' ', $arResult["QUESTIONS"]["SIMPLE_QUESTION_615"]["CAPTION"]);
                        echo htmlspecialchars($caption);
                        ?>
                        <?= ($arResult["QUESTIONS"]["SIMPLE_QUESTION_615"]["REQUIRED"] == "Y") ? "*" : "" ?>
                    </div>
                    <?php
                    $input = $arResult["QUESTIONS"]["SIMPLE_QUESTION_615"]["HTML_CODE"];
                    $input = str_replace('class="inputtext"', 'class="input__input"', $input);
                    echo $input;
                    ?>
                </label>
            </div>
        </div>

        <!-- Колонка 3 (сообщение) -->
        <div class="contact-form__column">
            <div class="contact-form__form-message">
                <div class="input">
                    <label class="input__label">
                        <div class="input__label-text">
                            <?php
                            $caption = str_replace(['<br>', '<br />', '<br/>'], ' ', $arResult["QUESTIONS"]["SIMPLE_QUESTION_292"]["CAPTION"]);
                            echo htmlspecialchars($caption);
                            ?>
                            <?= ($arResult["QUESTIONS"]["SIMPLE_QUESTION_292"]["REQUIRED"] == "Y") ? "*" : "" ?>
                        </div>
                        <?php
                        $input = $arResult["QUESTIONS"]["SIMPLE_QUESTION_292"]["HTML_CODE"];
                        $input = str_replace('class="inputtextarea"', 'class="input__input textarea"', $input);
                        echo $input;
                        ?>
                        <div class="input__notification"></div>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form__bottom">
        <div class="contact-form__bottom-policy">
            Нажимая «Отправить», Вы подтверждаете, что ознакомлены, полностью согласны и принимаете условия
            «Согласия на обработку персональных данных».
        </div>
        <button class="form-button contact-form__bottom-button" type="submit" name="web_form_submit" value="Y">
            <div class="form-button__title">Оставить заявку</div>
        </button>
    </div>
</form>
<?php endif; ?>