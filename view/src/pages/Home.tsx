import styled from "styled-components";

import StorefrontIcon from '@mui/icons-material/Storefront';
import ItemsList from "../components/ItemsList";

const Title = styled.h1`
  font-size: 2em;
  font-weight: 500;

  padding: 20px 0;

  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
`;

function Home() {
    return (
        <>
            <header>
                <Title><StorefrontIcon style={ {fontSize: '40px'} } />Gerenciador de Estoque</Title>
            </header>
            <main>
                <ItemsList />
            </main>
        </>
    )
}

export default Home;