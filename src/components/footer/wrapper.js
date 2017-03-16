// dependencies
import styled from 'styled-components';

// styles
import { color } from '../../styles/theme';

const Footer = styled.footer`
  background: ${color.blackPrimary};
  color: ${color.white};
  font-size: 0.875rem;
  line-height: 1.4;
  z-index: 1;
  padding: 0.75em 0;

  @media (min-width: 685px) {
    font-size: 0.9375rem;
  }
`;

export default Footer;
