<?php

return [
    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut ini berisi standar pesan kesalahan yang digunakan oleh
    | kelas validasi. Beberapa aturan mempunyai banyak versi seperti aturan 'size'.
    | Jangan ragu untuk mengoptimalkan setiap pesan yang ada di sini.
    |
    */

    'accepted'        => 'Bidang harus diterima.',
    'active_url'      => 'Bidang bukan URL yang valid.',
    'after'           => 'Bidang harus berisi tanggal setelah :date.',
    'after_or_equal'  => 'Bidang harus berisi tanggal setelah atau sama dengan :date.',
    'alpha'           => 'Bidang hanya boleh berisi huruf.',
    'alpha_dash'      => 'Bidang hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num'       => 'Bidang hanya boleh berisi huruf dan angka.',
    'array'           => 'Bidang harus berisi sebuah array.',
    'before'          => 'Bidang harus berisi tanggal sebelum :date.',
    'before_or_equal' => 'Bidang harus berisi tanggal sebelum atau sama dengan :date.',
    'between'         => [
        'numeric' => 'Bidang harus bernilai antara :min sampai :max.',
        'file'    => 'Bidang harus berukuran antara :min sampai :max kilobita.',
        'string'  => 'Bidang harus berisi antara :min sampai :max karakter.',
        'array'   => 'Bidang harus memiliki :min sampai :max anggota.',
    ],
    'boolean'        => 'Bidang harus bernilai true atau false',
    'confirmed'      => 'Konfirmasi Bidang tidak cocok.',
    'date'           => 'Bidang bukan tanggal yang valid.',
    'date_equals'    => 'Bidang harus berisi tanggal yang sama dengan :date.',
    'date_format'    => 'Bidang tidak cocok dengan format :format.',
    'different'      => 'Bidang dan :other harus berbeda.',
    'digits'         => 'Bidang harus terdiri dari :digits angka.',
    'digits_between' => 'Bidang harus terdiri dari :min sampai :max angka.',
    'dimensions'     => 'Bidang tidak memiliki dimensi gambar yang valid.',
    'distinct'       => 'Bidang memiliki nilai yang duplikat.',
    'email'          => 'Bidang harus berupa alamat surel yang valid.',
    'ends_with'      => 'Bidang harus diakhiri salah satu dari berikut: :values',
    'exists'         => 'Bidang yang dipilih tidak valid.',
    'file'           => 'Bidang harus berupa sebuah berkas.',
    'filled'         => 'Bidang harus memiliki nilai.',
    'gt'             => [
        'numeric' => 'Bidang harus bernilai lebih besar dari :value.',
        'file'    => 'Bidang harus berukuran lebih besar dari :value kilobita.',
        'string'  => 'Bidang harus berisi lebih besar dari :value karakter.',
        'array'   => 'Bidang harus memiliki lebih dari :value anggota.',
    ],
    'gte' => [
        'numeric' => 'Bidang harus bernilai lebih besar dari atau sama dengan :value.',
        'file'    => 'Bidang harus berukuran lebih besar dari atau sama dengan :value kilobita.',
        'string'  => 'Bidang harus berisi lebih besar dari atau sama dengan :value karakter.',
        'array'   => 'Bidang harus terdiri dari :value anggota atau lebih.',
    ],
    'image'    => 'Bidang harus berupa gambar.',
    'in'       => 'Bidang yang dipilih tidak valid.',
    'in_array' => 'Bidang tidak ada di dalam :other.',
    'integer'  => 'Bidang harus berupa bilangan bulat.',
    'ip'       => 'Bidang harus berupa alamat IP yang valid.',
    'ipv4'     => 'Bidang harus berupa alamat IPv4 yang valid.',
    'ipv6'     => 'Bidang harus berupa alamat IPv6 yang valid.',
    'json'     => 'Bidang harus berupa JSON string yang valid.',
    'lt'       => [
        'numeric' => 'Bidang harus bernilai kurang dari :value.',
        'file'    => 'Bidang harus berukuran kurang dari :value kilobita.',
        'string'  => 'Bidang harus berisi kurang dari :value karakter.',
        'array'   => 'Bidang harus memiliki kurang dari :value anggota.',
    ],
    'lte' => [
        'numeric' => 'Bidang harus bernilai kurang dari atau sama dengan :value.',
        'file'    => 'Bidang harus berukuran kurang dari atau sama dengan :value kilobita.',
        'string'  => 'Bidang harus berisi kurang dari atau sama dengan :value karakter.',
        'array'   => 'Bidang harus tidak lebih dari :value anggota.',
    ],
    'max' => [
        'numeric' => 'Bidang maskimal bernilai :max.',
        'file'    => 'Bidang maksimal berukuran :max kilobita.',
        'string'  => 'Bidang maskimal berisi :max karakter.',
        'array'   => 'Bidang maksimal terdiri dari :max anggota.',
    ],
    'mimes'     => 'Bidang harus berupa berkas berjenis: :values.',
    'mimetypes' => 'Bidang harus berupa berkas berjenis: :values.',
    'min'       => [
        'numeric' => 'Bidang minimal bernilai :min.',
        'file'    => 'Bidang minimal berukuran :min kilobita.',
        'string'  => 'Bidang minimal berisi :min karakter.',
        'array'   => 'Bidang minimal terdiri dari :min anggota.',
    ],
    'not_in'               => 'Bidang yang dipilih tidak valid.',
    'not_regex'            => 'Format Bidang tidak valid.',
    'numeric'              => 'Bidang harus berupa angka.',
    'password'             => 'Kata sandi salah.',
    'present'              => 'Bidang wajib ada.',
    'regex'                => 'Format Bidang tidak valid.',
    'required'             => 'Bidang wajib diisi.',
    'required_if'          => 'Bidang wajib diisi bila :other adalah :value.',
    'required_unless'      => 'Bidang wajib diisi kecuali :other memiliki nilai :values.',
    'required_with'        => 'Bidang wajib diisi bila terdapat :values.',
    'required_with_all'    => 'Bidang wajib diisi bila terdapat :values.',
    'required_without'     => 'Bidang wajib diisi bila tidak terdapat :values.',
    'required_without_all' => 'Bidang wajib diisi bila sama sekali tidak terdapat :values.',
    'same'                 => 'Bidang dan :other harus sama.',
    'size'                 => [
        'numeric' => 'Bidang harus berukuran :size.',
        'file'    => 'Bidang harus berukuran :size kilobyte.',
        'string'  => 'Bidang harus berukuran :size karakter.',
        'array'   => 'Bidang harus mengandung :size anggota.',
    ],
    'starts_with' => 'Bidang harus diawali salah satu dari berikut: :values',
    'string'      => 'Bidang harus berupa string.',
    'timezone'    => 'Bidang harus berisi zona waktu yang valid.',
    'unique'      => 'Bidang sudah ada sebelumnya.',
    'uploaded'    => 'Bidang gagal diunggah.',
    'url'         => 'Format Bidang tidak valid.',
    'uuid'        => 'Bidang harus merupakan UUID yang valid.',

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi untuk atribut sesuai keinginan dengan menggunakan 
    | konvensi "attribute.rule" dalam penamaan barisnya. Hal ini mempercepat dalam menentukan
    | baris bahasa kustom yang spesifik untuk aturan atribut yang diberikan.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |---------------------------------------------------------------------------------------
    | Kustom Validasi Atribut
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar 'placeholder' atribut dengan sesuatu yang
    | lebih mudah dimengerti oleh pembaca seperti "Alamat Surel" daripada "surel" saja.
    | Hal ini membantu kita dalam membuat pesan menjadi lebih ekspresif.
    |
    */

    'attributes' => [],
];
