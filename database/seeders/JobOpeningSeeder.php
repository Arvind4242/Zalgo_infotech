<?php

namespace Database\Seeders;

use App\Models\JobOpening;
use Illuminate\Database\Seeder;

class JobOpeningSeeder extends Seeder
{
    public function run(): void
    {
        $openings = [
            [
                'title'      => 'Web Development',
                'slug'       => 'web-dev',
                'icon'       => '🌐',
                'subtitle'   => 'Create amazing digital experiences for millions of users',
                'badge'      => 'Open Role',
                'skills'     => ['HTML/CSS', 'JavaScript', 'React', 'Angular', 'Vue.js', 'Node.js'],
                'is_active'  => true,
                'sort_order' => 1,
            ],
            [
                'title'      => 'Mobile Development',
                'slug'       => 'mobile-dev',
                'icon'       => '📱',
                'subtitle'   => 'Build the next generation of mobile applications',
                'badge'      => 'Open Role',
                'skills'     => ['iOS/Swift', 'Android/Kotlin', 'React Native', 'Flutter', 'Xamarin', 'Ionic'],
                'is_active'  => true,
                'sort_order' => 2,
            ],
            [
                'title'      => 'Data Science',
                'slug'       => 'data-science',
                'icon'       => '📊',
                'subtitle'   => 'Transform raw data into actionable business insights',
                'badge'      => 'Open Role',
                'skills'     => ['Python', 'R', 'SQL', 'Tableau', 'Power BI', 'TensorFlow'],
                'is_active'  => true,
                'sort_order' => 3,
            ],
            [
                'title'      => 'DevOps',
                'slug'       => 'devops',
                'icon'       => '⚙️',
                'subtitle'   => 'Bridge development and operations for seamless delivery',
                'badge'      => 'Open Role',
                'skills'     => ['Docker', 'Kubernetes', 'AWS', 'Azure', 'Jenkins', 'Terraform'],
                'is_active'  => true,
                'sort_order' => 4,
            ],
            [
                'title'      => 'Cybersecurity',
                'slug'       => 'cybersecurity',
                'icon'       => '🔒',
                'subtitle'   => 'Protect our digital assets and infrastructure',
                'badge'      => 'Open Role',
                'skills'     => ['Network Security', 'Penetration Testing', 'Incident Response', 'Malware Analysis', 'Compliance', 'Digital Forensics'],
                'is_active'  => true,
                'sort_order' => 5,
            ],
            [
                'title'      => 'AI / ML Engineering',
                'slug'       => 'ai-ml',
                'icon'       => '🤖',
                'subtitle'   => 'Shape the future with artificial intelligence and machine learning',
                'badge'      => 'Open Role',
                'skills'     => ['TensorFlow', 'PyTorch', 'Scikit-learn', 'OpenCV', 'NLP', 'Deep Learning'],
                'is_active'  => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($openings as $opening) {
            JobOpening::updateOrCreate(
                ['slug' => $opening['slug']],
                $opening
            );
        }
    }
}
