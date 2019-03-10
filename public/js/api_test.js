$(function(){
   
      // 登録する関数
   function storeData(){
       //









   }

   // 表示する関数
   function indexData(){
       //

  const url = '/api';
   $.getJSON(url)
       .done(function (data, textStatus, jqXHR) {
           console.log(data);
       })
       .fail(function (jqXHR, textStatus, errorThrown) {
           console.log(jqXHR.status + textStatus + errorThrown);
       })
       .always(function () {
           console.log('get:complete');
       });


   }

   // 削除する関数
   function deleteData(id){
       //

   }
   
   
  // 読み込み時に実行
  indexData();
   
    
    
});
