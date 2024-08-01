<?php
$languages = [
    [
        'name' => 'Java',
        'year' => 1995,
        'famous_frameworks' => ['Spring', 'Hibernate', 'Struts'],
        'creator' => 'James Gosling'
    ],
    [
        'name' => 'C#',
        'year' => 2000,
        'famous_frameworks' => ['ASP.NET', 'Xamarin', 'Unity'],
        'creator' => 'Microsoft'
    ],
    [
        'name' => 'PHP',
        'year' => 1995,
        'famous_frameworks' => ['Laravel', 'Symfony', 'CodeIgniter'],
        'creator' => 'Rasmus Lerdorf'
    ],
    [
        'name' => 'JavaScript',
        'year' => 1995,
        'famous_frameworks' => ['React', 'Angular', 'Vue'],
        'creator' => 'Brendan Eich'
    ],
    [
        'name' => 'Python',
        'year' => 1991,
        'famous_frameworks' => ['Django', 'Flask', 'Pyramid'],
        'creator' => 'Guido van Rossum'
    ]
];

// List danh sách ngôn ngữ
echo "<h2>Danh sách ngôn ngữ lập trình:</h2>";
echo "<ul>";
foreach ($languages as $language) {
    echo "<li>";
    echo "<strong>Tên:</strong> {$language['name']}<br>";
    echo "<strong>Năm ra đời:</strong> {$language['year']}<br>";
    echo "<strong>Frameworks nổi tiếng:</strong> " . implode(", ", $language['famous_frameworks']) . "<br>";
    echo "<strong>Người tạo:</strong> {$language['creator']}";
    echo "</li><br>";
}
echo "</ul>";

// Sort ngôn ngữ theo tên
usort($languages, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});

// List lại ngôn ngữ sau khi Sort
echo "<h2>Danh sách ngôn ngữ lập trình sau khi sắp xếp:</h2>";
echo "<ul>";
foreach ($languages as $language) {
    echo "<li>";
    echo "<strong>Tên:</strong> {$language['name']}<br>";
    echo "<strong>Năm ra đời:</strong> {$language['year']}<br>";
    echo "<strong>Frameworks nổi tiếng:</strong> " . implode(", ", $language['famous_frameworks']) . "<br>";
    echo "<strong>Người tạo:</strong> {$language['creator']}";
    echo "</li><br>";
}
echo "</ul>";

// Thêm ngôn ngữ Golang và Ruby
$languages[] = [
    'name' => 'Golang',
    'year' => 2009,
    'famous_frameworks' => ['Gin', 'Beego', 'Echo'],
    'creator' => 'Robert Griesemer, Rob Pike, Ken Thompson'
];

$languages[] = [
    'name' => 'Ruby',
    'year' => 1995,
    'famous_frameworks' => ['Ruby on Rails', 'Sinatra', 'Hanami'],
    'creator' => 'Yukihiro Matsumoto'
];

// Xóa ngôn ngữ JavaScript
$languages = array_filter($languages, function($language) {
    return $language['name'] !== 'JavaScript';
});

// List sách ngôn ngữ sau khi thêm, xóa
echo "<h2>Danh sách ngôn ngữ lập trình sau khi thêm và xóa:</h2>";
echo "<ul>";
foreach ($languages as $language) {
    echo "<li>";
    echo "<strong>Tên:</strong> {$language['name']}<br>";
    echo "<strong>Năm ra đời:</strong> {$language['year']}<br>";
    echo "<strong>Frameworks nổi tiếng:</strong> " . implode(", ", $language['famous_frameworks']) . "<br>";
    echo "<strong>Người tạo:</strong> {$language['creator']}";
    echo "</li><br>";
}
echo "</ul>";
?>
