(function($){


    function populateMenuTable(type){
        var $data = getTableData(type);
        var $str ="";
            $data.forEach((itm,index) =>{
                $str +="<tr id='row_'"+index+"'><td class='cell__btn-wrap'><button class='btn--edit'>edit</button> | <button class='btn--delete'>delete</button></td><td>";
                $str += itm.name;
                $str +="</td><td>";
                $str += itm.desc;
                $str +="</td><td>";
                $str += itm.price;
                $str +="</td><td></tr>";
            });

        var $tbody = $('#tbody');
        if($tbody.find('button').length > 0){
            $tbody.find('button').unbind('click');
        }
        $tbody.empty().html($str);
        $tbody.find('button').on('click', (evt)=>{
            evt.preventDefault();
            alert('evt');
            return false;
        });
    }

    function getTableData(type){
        var $data = $menuObj.filter(itm => itm.type === type);
        return $data[0].list;
    }

    $('.link__nav-top').on('click', (evt)=>{
        evt.preventDefault();
        var $type = $(evt.currentTarget).data('type');
        populateMenuTable($type);
        return false;
    });


}(jQuery))