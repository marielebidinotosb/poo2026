<?php
class Livro {
    public string $obra;
    public string $autor;
    public float $preco;

    public function definirDados(string $obra , string $autor , float $preco): void{
            $this->obra = $obra;
            $this->autor = $autor;
            $this->preco = $preco;
        }

    public function aplicarDesconto (float $percentual): void {
            $this->preco -= $this->preco * ($percentual / 100);
        }

    public function informarDados(): void{
        echo "Livro: {$this->obra} | Autor: {$this->autor}\n | Valor: R$ ". number_format($this->preco , 2, ",", "."). "\n";
        }
    }
