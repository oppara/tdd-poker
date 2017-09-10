# TDDBC仙台07課題：ポーカー

http://devtesting.jp/tddbc/?TDDBC%E4%BB%99%E5%8F%B007%2F%E8%AA%B2%E9%A1%8C_2

```
$ composer install
$ composer dump-autoload -o
$ composer test
```

* カード (card)
    * スートとランクを持つ
* スート (suit) - 以下の４種類を持つ
    * ♠ (スペード/spade)
    * ♥ (ハート/heart)
    * ♣ (クラブ/club)
    * ♦︎ (ダイヤ/diamond)
* ランク (rank) - 以下の１３種類を持つ
    * A (エース/ace), 2, 3, 4, 5, 6, 7, 8, 9, 10, J(ジャック/jack), Q(クイーン/queen), K(キング/king)
*カードひと組(4スート x 13ランク = 52枚)のことをデッキ(deck)と呼ぶ
