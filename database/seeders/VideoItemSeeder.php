<?php

namespace Database\Seeders;

use App\Models\VideoItem;
use Illuminate\Database\Seeder;

class VideoItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VideoItem::insert([
            [
                'frontend_user_id' => 1,
                'title'            => '摄像头1号',
                'url'              => 'https://video.roood.cn/live/34020000001320000011.m3u8?auth_key=1620566411-0-0-08e9e819b662432a2322ee101694893c',
                'thumbnail'        => 'http://api-monitoring.zuomo.net/storage/static/thumbnail.png',
                'description'      => '摄像头1号的描述信息',
            ],
            [
                'frontend_user_id' => 1,
                'title'            => '摄像头2号',
                'url'              => 'https://video.roood.cn/live/34020000001320000011.m3u8?auth_key=1620566411-0-0-08e9e819b662432a2322ee101694893c',
                'thumbnail'        => 'http://api-monitoring.zuomo.net/storage/static/thumbnail.png',
                'description'      => '摄像头2号的描述信息',
            ],
            [
                'frontend_user_id' => 1,
                'title'            => '摄像头3号',
                'url'              => 'https://video.roood.cn/live/34020000001320000011.m3u8?auth_key=1620566411-0-0-08e9e819b662432a2322ee101694893c',
                'thumbnail'        => 'http://api-monitoring.zuomo.net/storage/static/thumbnail.png',
                'description'      => '摄像头3号的描述信息',
            ],
        ]);
    }
}
