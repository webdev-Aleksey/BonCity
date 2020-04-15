<link rel="stylesheet" href="<?php echo site_url();?>/wp-content/themes/modus/template-parts/css/main.css">

    <div class="calc">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <div class="cupboards-options">
                        <form action="">

                            <!-- Выбор типа шкафа -->
                            <div class="cupboards-options__type">
                                <select name="tp" id="cupboardsType">
                                    <option label="Выберите тип шкафа"></option>
                                    <option value="двухдверный">двухдверный</option>
                                    <option value="трехдверный">трехдверный</option>
                                </select>
                            </div>

                            <!-- Выбор ширины шкафа -->

                                <!-- Двухдверные -->
                            <div class="cupboards-options__width blocked">
                                <select name="width" id="cupboardsWidth2" class="border">
                                    <option label="Выберите ширину шкафа"></option>
                                    <option value="1160">1160</option>
                                    <option value="1370">1370</option>
                                    <option value="1580">1580</option>
                                </select>

                                <!-- Трёхдверные -->
                                <select name="width" id="cupboardsWidth3">
                                    <option label="Выберите ширину шкафа"></option>
                                    <option value="2040">2040</option>
                                    <option value="2350">2350</option>
                                    <option value="2710">2710</option>
                                </select>
                            </div>

                            
                            <div class="cupboards-options__facade-type border">
                                <h3 class="">Выберите тип фасада</h3>

                                <!-- Блок двухдверных -->
                                <div id="tooDors" class="facade-item-wrapper">

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/orhidea2.jpg" alt="cupboard">
                                        </div>
                                        <label for="orhidea2">Орхидея
                                            
                                            <input id="orhidea2" name="tp" type="radio" value="orhidea2">

                                            <span class="checkmark"></span>

                                        </label>
                                        
                                    </div>

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/gorod2.jpg" alt="cupboard">
                                        </div>
                                        
                                        <label for="gorod2">Город

                                            <input id="gorod2" name="tp" type="radio" value="gorod2">

                                            <span class="checkmark"></span>

                                        </label>

                                    </div>

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/london2.jpg" alt="cupboard">
                                        </div>
                                        
                                        <label for="london2">Лондон

                                            <input id="london2" type="radio" name="tp" value="london2">

                                            <span class="checkmark"></span>

                                        </label>
                                    </div>


                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/paris2.jpg" alt="cupboard">
                                        </div>
                                        <label for="paris2">Париж
                                            
                                            <input id="paris2" name="tp" type="radio" value="paris2">

                                            <span class="checkmark"></span>

                                        </label>
                                        
                                    </div>


                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/peskostruj2.jpg" alt="cupboard">
                                        </div>

                                        <label for="peskostruj2">Пескоструй
                                            
                                            <input id="peskostruj2" name="tp" type="radio" value="peskostruj2">

                                            <span class="checkmark"></span>

                                        </label>
                                        
                                    </div>

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/mirror2.jpg" alt="cupboard">
                                        </div>
                                        <label for="mirror2">Зеркала
                                            
                                            <input id="mirror2" name="tp" type="radio" value="mirror2">

                                            <span class="checkmark"></span>

                                        </label>
                                        

                                    </div>

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/mirror-dsp-2.jpg" alt="cupboard">
                                        </div>
                                        <label for="mirrorDsp2">Зеркала/ДСП
                                            
                                            <input id="mirrorDsp2" name="tp" type="radio" value="mirrorDsp2">

                                            <span class="checkmark"></span>

                                        </label>
                                        
                                    </div>

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/dsp2.jpg" alt="cupboard">
                                        </div>
                                        



                                        <label for="dsp2">ДСП/ДСП
                                            
                                            <input id="dsp2" name="tp" type="radio" value="dsp2">

                                            <span class="checkmark"></span>

                                        </label>

                                    </div>

                                    

                                    

                                    

                                    

                                    

                                    

                                    

                                


                                </div>

                                <!-- Блок трёхдверных -->
                                <div id="threeDors" class="facade-item-wrapper">


                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/orhidea3.jpg" alt="cupboard">
                                        </div>
                                        <label for="orhidea3">Орхидея
                                            
                                            <input id="orhidea3" name="tp" type="radio" value="orhidea3">

                                            <span class="checkmark"></span>

                                        </label>
                                        
                                    </div>

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/gorod3.jpg" alt="cupboard">
                                        </div>
                                        
                                        <label for="gorod3">Город

                                            <input id="gorod3" name="tp" type="radio" value="gorod3">

                                            <span class="checkmark"></span>

                                        </label>

                                    </div>

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/london3.jpg" alt="cupboard">
                                        </div>
                                        
                                        <label for="london3">Лондон

                                            <input id="london3" type="radio" name="tp" value="london3">

                                            <span class="checkmark"></span>

                                        </label>
                                    </div>


                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/paris3.jpg" alt="cupboard">
                                        </div>
                                        <label for="paris3">Париж
                                            
                                            <input id="paris3" name="tp" type="radio" value="paris3">

                                            <span class="checkmark"></span>

                                        </label>
                                        
                                    </div>


                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/peskostruj3.jpg" alt="cupboard">
                                        </div>

                                        <label for="peskostruj3">Пескоструй
                                            
                                            <input id="peskostruj3" name="tp" type="radio" value="peskostruj3">

                                            <span class="checkmark"></span>

                                        </label>
                                        
                                    </div>

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/mirror3.jpg" alt="cupboard">
                                        </div>
                                        <label for="mirror3">Зеркала
                                            
                                            <input id="mirror3" name="tp" type="radio" value="mirror3">

                                            <span class="checkmark"></span>

                                        </label>
                                        

                                    </div>

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/mirror-dsp-3.jpg" alt="cupboard">
                                        </div>
                                        <label for="mirrorDsp3">Зеркала/ДСП
                                            
                                            <input id="mirrorDsp3" name="tp" type="radio" value="mirrorDsp3">

                                            <span class="checkmark"></span>

                                        </label>
                                        
                                    </div>

                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/dsp3.jpg" alt="cupboard">
                                        </div>
                                        



                                        <label for="dsp3">ДСП/ДСП
                                            
                                            <input id="dsp3" name="tp" type="radio" value="dsp3">

                                            <span class="checkmark"></span>

                                        </label>

                                    </div>

                                    <!-- <div class="facade-item">

                                        <div class="facade-item__img">
                                            <img src="img/dsp3.jpg" alt="cupboard">
                                        </div>
                                        
                                        <label for="dsp3">название
                                            <input id="dsp3" name="tp" type="radio" value="dsp3">
                                            <span class="checkmark"></span>
    
                                        </label>
    
                                    </div>
    
                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="img/gorod3.jpg" alt="cupboard">
                                        </div>
                                        
                                        <label for="gorod3">название
    
                                            <input id="gorod3" name="tp" type="radio" value="gorod3">
    
                                            <span class="checkmark"></span>
    
                                        </label>
    
                                    </div>
    
                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="img/london3.jpg" alt="cupboard">
                                        </div>
                                        
                                        <label for="london3">название
    
                                            <input id="london3" type="radio" name="tp" value="london3">
    
                                            <span class="checkmark"></span>
    
                                        </label>
                                    </div>
    
                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="img/mirror3.jpg" alt="cupboard">
                                        </div>
                                        <label for="mirror3">название
                                            
                                            <input id="mirror3" name="tp" type="radio" value="mirror3">
    
                                            <span class="checkmark"></span>
    
                                        </label>
                                        
    
                                    </div>
    
                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="img/mirror-dsp-3.jpg" alt="cupboard">
                                        </div>
                                        <label for="mirrorDsp3">название
                                            
                                            <input id="mirrorDsp3" name="tp" type="radio" value="mirrorDsp3">
    
                                            <span class="checkmark"></span>
    
                                        </label>
                                        
                                    </div>
    
                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="img/orhidea3.jpg" alt="cupboard">
                                        </div>
                                        <label for="orhidea3">название
                                            
                                            <input id="orhidea3" name="tp" type="radio" value="orhidea3">
    
                                            <span class="checkmark"></span>
    
                                        </label>
                                        
                                    </div>
    
                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="img/paris3.jpg" alt="cupboard">
                                        </div>
                                        <label for="paris3">название
                                            
                                            <input id="paris3" name="tp" type="radio" value="paris3">
    
                                            <span class="checkmark"></span>
    
                                        </label>
                                        
                                    </div>
    
                                    <div class="facade-item">
                                        <div class="facade-item__img">
                                            <img src="img/peskostruj3.jpg" alt="cupboard">
                                        </div>
    
                                        <label for="peskostruj3">название
                                            
                                            <input id="peskostruj3" name="tp" type="radio" value="peskostruj3">
    
                                            <span class="checkmark"></span>
    
                                        </label>
                                        
                                    </div> -->
    
                                    


                                </div>

                            </div>

                        </form>



                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="cupboards-selected">
                        <h3 class="cupboards-selected__title">
                            Название
                        </h3>

                        <span class="cupboards-selected__type">
                            Количество дверей
                        </span>

                        <div class="cupboards-selected__width">
                            <span class="width-title"></span><span class="width-value">Размеры</span>
                        </div>

                        <div class="cupboards-selected__img">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/dsp2.jpg" alt="" data-img="dsp2">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/dsp3.jpg" alt="" data-img="dsp3">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/gorod2.jpg" alt="" data-img="gorod2">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/gorod3.jpg" alt="" data-img="gorod3">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/london2.jpg" alt="" data-img="london2">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/london3.jpg" alt="" data-img="london3">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/mirror2.jpg" alt="" data-img="mirror2">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/mirror3.jpg" alt="" data-img="mirror3">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/mirror-dsp-2.jpg" alt="" data-img="mirrorDsp2">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/mirror-dsp-3.jpg" alt="" data-img="mirrorDsp3">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/orhidea2.jpg" alt="" data-img="orhidea2">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/orhidea3.jpg" alt="" data-img="orhidea3">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/paris2.jpg" alt="" data-img="paris2">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/paris3.jpg" alt="" data-img="paris3">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/peskostruj2.jpg" alt="" data-img="peskostruj2">
                            <img src="<?php echo site_url();?>/wp-content/themes/modus/template-parts/img/peskostruj3.jpg" alt="" data-img="peskostruj3">
                            
                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="cupboards-order">

                        <h2 class="cupboards-order__title">
                            СУММА ЗАКАЗА:
                        </h2>

                        <div class="d-flex justify-content-center align-items-end">
                            <span class="cupboards-order__amount">
                                6500
                            </span>
                            <div class="cupboards-order__currency">
                                руб.
                            </div>
                        </div>

                        <div class="cupboards-order__form border">
                            <form class="form" action="">
                                <span class="form__title">Введите ваши данные для <br> оформления заказа</span>
                                <input class="form__tel" type="text" placeholder="Телефон">
                                <input class="form__name" type="text" placeholder="Имя">
                                <input class="form__submit" type="submit" value="Заказать">


                            </form>
                        </div>


                        
                        
                    </div>

                </div>
            </div> 
        </div>

    </div>


    

</body>
