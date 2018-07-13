<?php

use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Db::name('users')->insert([
            'name'     => str_random(10).$this->rand_word(rand(0,5)),
            'nickname' => str_random(10).$this->rand_word(rand(0,5)).rand(0,3),
            'password' => '123456'

        ]);
    }

    /**
     *
     * @param int $j 字符个数
     * @return string
     */
    public function rand_word($j=3)
    {
        $str = '';
        for ($i = 0; $i < $j; $i++)
        {
            $str.=chr(rand(97,122));
        }
        return $str;
    }
}
