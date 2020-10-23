<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('foods')->insert([
            //單品咖啡
            ['name'=>'哥倫比亞 粉紅波旁','price'=>135,'category'=>0,'remark'=>'新品','content'=>'風味：柑橘、萊姆、葡萄柚、桃子、花香、紅茶 | 烘焙度：淺焙','picture'=>'/images/merchandise/portrait_single1_md.jpg'],
            ['name'=>'祕魯 生命之樹水洗','price'=>135,'category'=>0,'remark'=>'','content'=>'風味：紅葡萄、果汁、巧克力、悠長的甜感 | 烘焙度：淺焙','picture'=>'/images/merchandise/portrait_single2_md.jpg'],
            ['name'=>'衣索比亞 馬蹄蘭','price'=>135,'category'=>0,'remark'=>'秒殺','content'=>'風味：草莓、水蜜桃、芒果、哈密瓜、橙皮、輕盈橙花香氣、餘韻烏龍茶花韻 | 烘焙度：淺焙','picture'=>'/images/merchandise/portrait_single3_md.jpg'],
            ['name'=>'哥斯大黎加 百香蜜','price'=>135,'category'=>0,'remark'=>'','content'=>'萊姆、百香果、桑葚、草莓、荔枝、熱帶水果、葡萄酒、焦糖甜感、酒釀櫻桃 | 烘焙度：淺焙','picture'=>'/images/merchandise/portrait_single4_md.jpg'],
            ['name'=>'印尼 虎皇','price'=>135,'category'=>0,'remark'=>'','content'=>'風味：青蘋果、蔗糖、甘草、蜂蜜、烏梅、仙草、轉涼後帶莓果優雅酸值 | 烘焙度：淺焙','picture'=>'/images/merchandise/portrait_single5_md.jpg'],
            ['name'=>'曼巴綜合','price'=>135,'category'=>0,'remark'=>'新品','content'=>'風味：香醇濃郁，飽滿滑順 | 烘焙度：中深焙','picture'=>'/images/merchandise/portrait_single6_md.jpg'],
            ['name'=>'薩爾瓦多 帝卡帕','price'=>135,'category'=>0,'remark'=>'秒殺','content'=>'風味：橘子果醬、楓糖 | 烘焙度：淺中焙','picture'=>'/images/merchandise/portrait_single7_md.jpg'],
            ['name'=>'瓜地馬拉 卡佩提洛莊園','price'=>135,'category'=>0,'remark'=>'','content'=>'風味：黑櫻桃、紅心芭樂、糖漬檸檬、可可尾韻 | 烘焙度：中深焙','picture'=>'/images/merchandise/portrait_single8_md.jpg'],
            //特調咖啡
            ['name'=>'德國 皇家咖啡','price'=>110,'category'=>1,'remark'=>'新品','content'=>'德國皇家高品質咖啡','picture'=>'/images/merchandise/portrait_special1_md.jpg'],
            ['name'=>'莫札特 魔笛咖啡','price'=>110,'category'=>1,'remark'=>'','content'=>'從經典傳世作品提煉獨特的配方','picture'=>'/images/merchandise/portrait_special2_md.jpg'],
            ['name'=>'巴西 里亞咖啡','price'=>110,'category'=>1,'remark'=>'','content'=>'道地義大利咖啡豆風味','picture'=>'/images/merchandise/portrait_special3_md.jpg'],
            ['name'=>'瑞典 皇家咖啡','price'=>110,'category'=>1,'remark'=>'新品','content'=>'口感均衡,醇厚與柔和的可可香味','picture'=>'/images/merchandise/portrait_special4_md.jpg'],
            ['name'=>'Alberto義式','price'=>110,'category'=>1,'remark'=>'秒殺','content'=>'最火熱的的咖啡原始風味','picture'=>'/images/merchandise/portrait_special5_md.jpg'],
            ['name'=>'阿拉比卡肯特','price'=>110,'category'=>1,'remark'=>'','content'=>'印尼最優良咖啡莊園','picture'=>'/images/merchandise/portrait_special6_md.jpg'],
            ['name'=>'7 Café KONA','price'=>110,'category'=>1,'remark'=>'新品','content'=>'天然回甘、細膩口感、清新又順滑。','picture'=>'/images/merchandise/portrait_special7_md.jpg'],
            ['name'=>'UCC金質精選','price'=>110,'category'=>1,'remark'=>'','content'=>'日本人氣商品','picture'=>'/images/merchandise/portrait_special8_md.jpg'],
            //拿鐵
            ['name'=>'香草拿鐵','price'=>150,'category'=>2,'remark'=>'新品','content'=>'香草薰香美味動人','picture'=>'/images/merchandise/portrait_latte1_md.jpg'],
            ['name'=>'蜂蜜拿鐵','price'=>150,'category'=>2,'remark'=>'秒殺','content'=>'甜蜜風味回味無窮','picture'=>'/images/merchandise/portrait_latte2_md.jpg'],
            ['name'=>'焦糖拿鐵','price'=>150,'category'=>2,'remark'=>'','content'=>'焦香四溢','picture'=>'/images/merchandise/portrait_latte3_md.jpg'],
            ['name'=>'香蕉拿鐵','price'=>150,'category'=>2,'remark'=>'','content'=>'香蕉新鮮','picture'=>'/images/merchandise/portrait_latte4_md.jpg'],
            ['name'=>'玫瑰拿鐵','price'=>150,'category'=>2,'remark'=>'秒殺','content'=>'少女情懷','picture'=>'/images/merchandise/portrait_latte5_md.jpg'],
            ['name'=>'巧克力拿鐵','price'=>150,'category'=>2,'remark'=>'新品','content'=>'香濃可口','picture'=>'/images/merchandise/portrait_latte6_md.jpg'],
            //水果茶
            ['name'=>'莓果紅茶','price'=>90,'category'=>3,'remark'=>'新品','content'=>'莓果','picture'=>'/images/merchandise/portrait_tea1_md.jpg'],
            ['name'=>'蘋果醋清茶','price'=>90,'category'=>3,'remark'=>'','content'=>'蘋果醋','picture'=>'/images/merchandise/portrait_tea2_md.jpg'],
            //花茶
            ['name'=>'茉香綠茶','price'=>80,'category'=>4,'remark'=>'秒殺','content'=>'茉香','picture'=>'/images/merchandise/portrait_tea3_md.jpg'],
            ['name'=>'玫瑰花茶','price'=>80,'category'=>4,'remark'=>'','content'=>'玫瑰','picture'=>'/images/merchandise/portrait_tea4_md.jpg'],
            ['name'=>'菊花果香','price'=>80,'category'=>4,'remark'=>'','content'=>'菊花','picture'=>'/images/merchandise/portrait_tea5_md.jpg'],
            ['name'=>'薰衣草香','price'=>80,'category'=>4,'remark'=>'秒殺','content'=>'薰衣草','picture'=>'/images/merchandise/portrait_tea6_md.jpg'],
            //蛋糕
            ['name'=>'巧克力戀人','price'=>180,'category'=>5,'remark'=>'新品','content'=>'巧克力','picture'=>'/images/merchandise/portrait_cake1_md.jpg'],
            ['name'=>'盛夏光年','price'=>180,'category'=>5,'remark'=>'','content'=>'盛夏','picture'=>'/images/merchandise/portrait_cake2_md.jpg'],
            ['name'=>'薄脆蛋糕','price'=>180,'category'=>5,'remark'=>'秒殺','content'=>'薄脆','picture'=>'/images/merchandise/portrait_cake3_md.jpg'],
            ['name'=>'提納米蘇','price'=>180,'category'=>5,'remark'=>'','content'=>'提納','picture'=>'/images/merchandise/portrait_cake4_md.jpg'],
            ['name'=>'雪上梅','price'=>180,'category'=>5,'remark'=>'','content'=>'雪','picture'=>'/images/merchandise/portrait_cake5_md.jpg'],
            ['name'=>'藍莓繽紛','price'=>180,'category'=>5,'remark'=>'秒殺','content'=>'藍莓','picture'=>'/images/merchandise/portrait_cake6_md.jpg'],
            //餅乾
            ['name'=>'巧克力餅乾','price'=>100,'category'=>6,'remark'=>'新品','content'=>'巧克力','picture'=>'/images/merchandise/portrait_cookie1_md.jpg'],
            ['name'=>'香蕉餅乾','price'=>100,'category'=>6,'remark'=>'','content'=>'香蕉','picture'=>'/images/merchandise/portrait_cookie2_md.jpg'],
            ['name'=>'草莓餅乾','price'=>100,'category'=>6,'remark'=>'秒殺','content'=>'草莓','picture'=>'/images/merchandise/portrait_cookie3_md.jpg'],
            ['name'=>'芋頭餅乾','price'=>100,'category'=>6,'remark'=>'','content'=>'芋頭','picture'=>'/images/merchandise/portrait_cookie4_md.jpg'],
            ['name'=>'墨西哥餅乾','price'=>100,'category'=>6,'remark'=>'','content'=>'墨西哥','picture'=>'/images/merchandise/portrait_cookie5_md.jpg'],
            ['name'=>'玉米餅乾','price'=>100,'category'=>6,'remark'=>'秒殺','content'=>'玉米','picture'=>'/images/merchandise/portrait_cookie6_md.jpg'],
            //甜點
            ['name'=>'摩摩喳喳','price'=>180,'category'=>7,'remark'=>'秒殺','content'=>'摩摩','picture'=>'/images/merchandise/portrait_dessert1_md.jpg'],
            ['name'=>'芋頭西米露','price'=>180,'category'=>7,'remark'=>'','content'=>'芋頭','picture'=>'/images/merchandise/portrait_dessert2_md.jpg'],
            ['name'=>'牛奶薏人','price'=>180,'category'=>7,'remark'=>'新品','content'=>'牛奶','picture'=>'/images/merchandise/portrait_dessert3_md.jpg'],
        ]);
    }
}
