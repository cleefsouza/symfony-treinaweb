## PHP, YAML e XML

Básica dos arquivos de configuração com extensão .php, .yaml e .xml

### YAML

```yaml
alimentos:
  # Listas
  frutas:
    - abacaxi
    - melao
    - maca

  verduras:
    - tomate
    - cenoura

# Associação
cores-frutas:
  abacaxi: "amarelo"
  melao: "amarelo"
  maca: "vermelho"
```

---

### XML

```xml
<?xml version="1.0" encoding="UTF-8" ?>
<alimentos>
    <!-- Listas -->
    <frutas>
        <fruta>abacaxi</fruta>
        <fruta>melao</fruta>
        <fruta>maca</fruta>
    </frutas>

    <verduras>
        <verdura>tomate</verdura>
        <verdura>cenoura</verdura>
    </verduras>
</alimentos>

<!-- Associação -->
<cores-frutas>
    <abacaxi>amarelo</abacaxi>
    <melao>amarelo</melao>
    <maca>vermelho</maca>
</cores-frutas>
```

---

### PHP

```php
<?php
$array = [
    // Listas
    "alimentos" => [
        "frutas" => [
            "abacaxi",
            "melao",
            "maca",
        ],
        "verduras" => [
            "tomate",
            "cenoura",
        ]
    ],
    // Associação
    "cores_frutas" => [
        "abacaxi" => "amarelo",
        "melao" => "amarelo",
        "maca" => "amarelo",
    ]
];

```
