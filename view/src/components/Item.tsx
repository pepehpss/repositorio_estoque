import ProductType from "../types/ProductType";

import styled from "styled-components";
import { Link } from "react-router-dom";

import DefaultPhoto from '../images/default-product.jpg';

const ProductImage = styled.img`
    width: 90%;
    border-radius: 6px;
`;

function Item (props: ProductType) {
    return (
        <tr>
            <td>
                <ProductImage src={props.foto || DefaultPhoto} alt="" />
            </td>
            <td>
                <Link to=''>{props.nome}</Link>
            </td>
            <td>{props.quant}</td>
            <td>{`R$ ${props.preco}`}</td>
        </tr>
    );
}

export default Item;
