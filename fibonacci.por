programa
{
    funcao inicio()
    {
        inteiro termo1=0, termo2=1,quantidadeNumero
        inteiro proximoTermo

        escreva("Digite a quantidade de termos:")
        leia(quantidadeNumero)

        escreva("A sequencia fibonacci com ",quantidadeNumero," termos.\n")
        escreva(termo1,"",termo2,"")

        para(inteiro i=2; i<=quantidadeNumero; i++){
            proximoTermo=termo1+termo2
            escreva(proximoTermo," ")

            termo1=termo2
            termo2=proximoTermo
        }
    }
}    