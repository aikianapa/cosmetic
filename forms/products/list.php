<html>
<div class="chat-wrapper chat-wrapper-two">

  <div class="chat-sidebar">
    <div class="chat-sidebar-body" style="top:0;bottom:0;">
      <div class="flex-fill pd-y-20 pd-x-10">
        <div class="d-flex align-items-center justify-content-between pd-x-10 mg-b-10">
          <span class="tx-10 tx-uppercase tx-medium tx-color-03 tx-sans tx-spacing-1"><i class="ri-group-line"></i> Категории</span>

            <span data-toggle="tooltip" title="" data-original-title="Edit">
              <a href="#" data-ajax="{'url':'/cms/ajax/form/catalogs/edit/categories','html':'.products-edit-modal'}">
                <i class="ri-add-circle-line"></i>
              </a>
            </span>

        </div>
        <nav id="{{_form}}ListCategories" class="nav flex-column nav-chat mg-b-20">

                            <ul class='nav nav-aside' wb-tree="{'item':'categories'}">
                                <li class="nav-item" wb-if='"{{active}}" == "on"' >
                                    <a class="nav-link" href="#" value="{{id}}"
                                       data-ajax="{'url':'/ajax/form/products/list/','size':'30','filter':{'category':'{{id}}' },'bind':'cms.list.products','target':'#{{_form}}List','render':'client'}"
                                       >
                                        {{data.{{_sess.lang}}}}
                                    </a>
                                </li>
                            </ul>

          <!--wb-foreach data-ajax="{'url':'/ajax/form/products/list/','filter':{'isgroup': 'on'},'bind':'cms.list.roles','render':'client'}">
            <span class="nav-link">
            <a href="#" data-ajax="{'url':'/ajax/form/products/list/','size':'30','filter':{ 'isgroup': { '$ne': 'on' },'role':'{{_id}}' },'bind':'cms.list.products','target':'#{{_form}}List','render':'client'}">
              {{name}}
            </a>
            <a href="#" data-ajax="{'url':'/cms/ajax/form/products/role/{{_id}}','html':'.products-edit-modal'}"
            class="pos-absolute r-10"><i class="ri-file-edit-line"></i></a>
          </span>
          </wb-foreach-->
        </nav>
      </div>
    </div>
  </div>

  <div class="chat-content">

    <nav class="nav navbar navbar-expand-md col">
      <a class="navbar-brand tx-bold tx-spacing--2 order-1" href="javascript:">Продукция</a>
      <button class="navbar-toggler order-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="wd-20 ht-20 fa fa-ellipsis-v"></i>
      </button>

      <div class="collapse navbar-collapse order-2" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#" data-ajax="{'target':'#{{_form}}List','filter_remove': 'active'}">Все
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-ajax="{'target':'#{{_form}}List','filter_remove': 'active','filter_add':{'active':'on'}}">Активные</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-ajax="{'target':'#{{_form}}List','filter_remove': 'active','filter_add':{ 'active': { '$ne': 'on' } } }">Скрытые</a>
          </li>
        </ul>
        <form class="form-inline mg-t-10 mg-lg-0">
              <input class="form-control search-header" type="search" placeholder="Поиск..." aria-label="Поиск..."
               data-ajax="{'target':'#{{_form}}List','filter_add':{'$or':[{ 'articul' : {'$like' : '$value'} }, { 'main.ru.data.name': {'$like' : '$value'} }, { 'price': {'$like' : '$value'} },{ 'volume': {'$like' : '$value'} } ]} }">

          <button class="btn btn-success" type="button" data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/_new','html':'.products-edit-modal'}">Создать</button>
        </form>
      </div>
    </nav>


    <div class="list-group m-2" id="{{_form}}List">
      <wb-foreach data-ajax="{'url':'/ajax/form/products/list/','size':'{{_sett.page_size}}','filter':{ 'isgroup': { '$ne': 'on' } },'bind':'cms.list.products','render':'client'}">
        <div class="list-group-item d-flex align-items-center">
          {{#if !isgroup}}
            <div  data-ajax="{'url':'/cms/ajax/form/products/edit/{{_id}}','html':'.products-edit-modal','modal':'#{{_form}}ModalEdit'}" class="w-100">
              <a href="javascript:" class="tx-13 tx-inverse tx-semibold mg-b-0">
                [{{articul}}]
                <i class="ri-bubble-chart-line"></i> {{main.ru.data.name}}
                <span class="badge badge-secondary"><i class="ri-flask-line"></i> {{volume}}</span>
                <span class="badge badge-primary"><i class="ri-coin-line"></i> {{price}} ₽</span>
              </a>

            </div>
          {{/if}}

          <div class="custom-control custom-switch pos-absolute r-80">
            {{#if active=='on' }}
              <input type="checkbox" class="custom-control-input" name="active" checked id="{{_form}}SwitchItemActive{{ @index }}"
                onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'active'})">
            {{/if}}
            {{#if active !='on' }}
              <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}SwitchItemActive{{ @index }}"
                onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'active'})">
            {{/if}}
            <label class="custom-control-label" for="{{_form}}SwitchItemActive{{ @index }}">&nbsp;</label>
          </div>

          <a href="javascript:" data-ajax="{'url':'/cms/ajax/form/products/edit/{{_id}}','html':'.products-edit-modal'}"
            class="pos-absolute r-40"><i class="ri-file-edit-line"></i></a>
          <div class="dropdown dropright pos-absolute r-10 p-0 m-0" style="line-height: normal;">
            <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="ri-more-2-fill"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#" data-ajax="{'url':'/cms/ajax/form/products/edit/{{_id}}','html':'.products-edit-modal'}">Изменить</a>
              <a class="dropdown-item" href="javascript:"
                 data-ajax="{'url':'/ajax/rmitem/{{_form}}/{{_id}}','update':'cms.list.products','html':'.products-edit-modal'}">Удалить</a>
            </div>
          </div>
        </div>
      </wb-foreach>
      <wb-jq wb="{'append':'#{{_form}}List template','render':'client'}" >
        <wb-snippet wb-name="pagination"/>
      </wb-jq>
    </div>
    <div class="products-edit-modal"></div>
  </div>

</div>

</html>
