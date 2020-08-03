<html>
<div class="modal fade effect-scale show removable" id="modalProductsEdit" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fa fa-close wd-20" data-dismiss="modal" aria-label="Close"></i>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}SwitchItemActive" onchange="$('#{{_form}}ValueItemActive').prop('checked',$(this).prop('checked'));">
                    <label class="custom-control-label" for="{{_form}}SwitchItemActive">Активирован</label>
                </div>
            </div>
            <div class="modal-body pb-0">
                <form id="{{_form}}EditForm">
                    <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}ValueItemActive">
                    <div class="form-group row">
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{_route.host}}/</span>
                            </div>
                            <input type="text" name="id" class="form-control" placeholder="Страница">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Категория</label>
                        <div class="col-sm-10">
                            <select wb-tree="{'item':'categories'}" name="category" placeholder="Категория" class="form-control" required>
                                <option wb-if='"{{active}}" == "on"' value="{{id}}">{{data.ru}}</option>
                            </select>
                        </div>
                    </div>

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#{{_form}}EditForm-tab1" role="tab" aria-controls="{{_form}}EditForm-tab1" aria-selected="true">{{_lang.main}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#{{_form}}EditForm-tab2" role="tab" aria-controls="{{_form}}EditForm-tab2" aria-selected="false">{{_lang.prop}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#{{_form}}EditForm-tab3" role="tab" aria-controls="{{_form}}EditForm-tab3" aria-selected="false">{{_lang.seo}}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#{{_form}}EditForm-tab4" role="tab" aria-controls="{{_form}}EditForm-tab4" aria-selected="false">{{_lang.images}}</a>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane fade show active" id="{{_form}}EditForm-tab1" role="tabpanel" aria-labelledby="{{_form}}EditForm-tab1">

                            <div class="form-group row">
                                <div class="col-sm-6 col-lg-3">
                                    <label class="form-control-label">Артикул</label>
                                    <input type="text" class="form-control" name="articul" placeholder="Артикул" required>
                                </div>
                                
                                <div class="col-sm-6 col-lg-3">
                                    <label class="form-control-label">Цена ₽</label>
                                    <input type="text" class="form-control" name="price" placeholder="Цена ₽">
                                </div>
                            
                                <div class="col-sm-6 col-lg-3">
                                    <label class="form-control-label">Объём</label>
                                    <input type="text" class="form-control" name="volume" placeholder="Объём">
                                </div>
    
                                <div class="col-sm-6 col-lg-3">
                                    <label class="form-control-label">Рейтинг</label>
                                    <input type="number" min="1" max="5" class="form-control" name="rating" placeholder="Рейтинг">
                                </div> 
                            </div>
                            
                            <wb-multilang name="main" wb-lang="{'ru':'Русский','en':'Английский'}">
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">{{_lang.name}}</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" placeholder="{{_lang.name}}">
                                    </div>
                                </div>                                
                               
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Тэги</label>
                                    <div class="col-sm-10">
                                        <wb-module wb="{'module':'tagsinput'}" class="form-control" name="tags" placeholder="Тэги" />
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-12">
                                        <wb-module wb="{'module':'jodit'}" name="text" />
                                    </div>
                                </div>
                            </wb-multilang>
                            
                            

                        </div>
                        <div class="tab-pane fade" id="{{_form}}EditForm-tab2" role="tabpanel" aria-labelledby="{{_form}}EditForm-tab2">
                            <wb-multilang name="prop" wb-lang="{'ru':'Русский','en':'Английский'}">
                                <wb-multiinput name="ingredients">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="col-sm-9">
                                        <textarea rows="auto" class="form-control" name="descr"></textarea>
                                    </div>
                                </wb-multiinput>
                            </wb-multilang>
                        </div>
                        <div class="tab-pane fade" id="{{_form}}EditForm-tab3" role="tabpanel" aria-labelledby="{{_form}}EditForm-tab3">
                            <wb-multilang name="seo" wb-lang="{'ru':'Русский','en':'Английский'}">
                                <wb-include wb="form=common&mode=seo" />
                            </wb-multilang>
                        </div>
                        <div class="tab-pane fade" id="{{_form}}EditForm-tab4" role="tabpanel" aria-labelledby="{{_form}}EditForm-tab4">
                            <wb-module wb="module=filepicker&mode=multi" name="images" />
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>
<wb-lang>
[ru]
main = Основное
prop = Состав
seo = Оптимизация
name = Наименование
images = Изображения
[en]
main = Main
prop = Ingredients
seo = SEO
name = Name
images = Images
</wb-lang>
</html>
