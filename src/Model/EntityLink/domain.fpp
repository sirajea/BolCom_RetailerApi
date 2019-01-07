namespace BolCom\RetailerApi\Model\EntityLink {
    data Type = CART | ORDER | ORDER_ITEM | RETURN_ITEM deriving(Enum(useValue)) with (
            CART: 'cart',
            ORDER: 'order',
            ORDER_ITEM: 'order_item',
            RETURN_ITEM: 'return_item'
        );

    data InternalReference = Int deriving(FromScalar, ToScalar);

    data ExternalReference = String deriving(FromString, ToString);
}
