<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class contactseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact = [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'mobile' => '0424222222',
                'subject' => 'General Inquiry',
                'message' => 'Vestibulum congue condimentum tincidunt. Duis eleifend erat sed libero interdum rhoncus. Vivamus mollis dolor in lacinia consequat. Nunc rutrum, elit in feugiat aliquet, lacus felis ullamcorper neque, vitae ultrices risus nisi ut turpis. Sed a finibus est, eu venenatis augue. Sed dictum luctus arcu, ac rutrum tortor.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Additional entries...
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'mobile' => '0424333333',
                'subject' => 'Product Support',
                'message' => 'Suspendisse fermentum, mauris eu imperdiet rhoncus, nibh metus maximus tellus, non consectetur nulla felis nec orci. Curabitur at risus finibus, posuere quam ut, volutpat neque. Sed interdum pulvinar metus id dictum. Donec ac ligula orci. Vivamus vehicula feugiat velit, in euismod arcu bibendum sit amet.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Alex Johnson',
                'email' => 'alexjohnson@example.com',
                'mobile' => '0424444444',
                'subject' => 'Partnership Opportunity',
                'message' => 'Integer vel magna vitae risus laoreet egestas nec eu urna. Sed auctor magna quis ligula dapibus, eget venenatis purus pharetra. Nulla in tellus elit. Aenean nec posuere leo, sed sagittis justo. Mauris accumsan lorem non ligula cursus, eget ullamcorper justo ullamcorper. Aliquam sed malesuada nisi, sed posuere dolor.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'emilybrown@example.com',
                'mobile' => '0424555555',
                'subject' => 'Job Application',
                'message' => 'Maecenas non fringilla neque, vel consectetur mi. In luctus tincidunt tortor, ut finibus lectus interdum ac. Donec ut pulvinar nulla. Etiam hendrerit erat id purus scelerisque, ac vestibulum nulla tristique. Phasellus dignissim, sapien in tincidunt ullamcorper, sapien sapien scelerisque ipsum, a interdum erat mauris euismod lorem.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table("contact_details")->insert($contact);

    }
}
