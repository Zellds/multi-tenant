<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Carbon\Carbon;

class PostsSeeder extends Seeder
{
    public function run(): void
    {
        $usersTenantMap = [
            2 => [1, 2],
            3 => [2],
            4 => [3],
            5 => [1, 4],
            6 => [5]
        ];

        foreach ($usersTenantMap as $userId => $tenantIds) {
            foreach ($tenantIds as $tenantId) {
                $numPosts = rand(2, 4);
                for ($i = 0; $i < $numPosts; $i++) {
                    Post::create([
                        'user_id' => $userId,
                        'tenant_id' => $tenantId,
                        'content' => 'Conteúdo da postagem...',
                        'created_at' => Carbon::now()->subDays($i * 10)->format('Y-m-d H:i:s')
                    ]);
                }
            }
        }
    }
}
