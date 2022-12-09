import React from "react";
import { SVGIconProps } from "../types";

const Instagram: React.FC<SVGIconProps> = ({ size, fill }): JSX.Element => {
  return (
    <svg
      width={size}
      height={size}
      viewBox="0 0 23 22"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M16.2407 1H6.76023C3.85535 1 1.50049 3.35487 1.50049 6.25974V15.7403C1.50049 18.6451 3.85535 21 6.76023 21H16.2407C19.1456 21 21.5005 18.6451 21.5005 15.7403V6.25974C21.5005 3.35487 19.1456 1 16.2407 1Z"
        stroke={fill}
        stroke-width="1.5"
      />
      <path
        d="M11.4991 15.6754C14.0812 15.6754 16.1744 13.5821 16.1744 11C16.1744 8.41792 14.0812 6.32471 11.4991 6.32471C8.91694 6.32471 6.82373 8.41792 6.82373 11C6.82373 13.5821 8.91694 15.6754 11.4991 15.6754Z"
        stroke={fill}
        stroke-width="1.5"
      />
      <path
        d="M17.4082 5.48053C17.6233 5.48053 17.7978 5.3061 17.7978 5.09092C17.7978 4.87574 17.6233 4.70131 17.4082 4.70131C17.193 4.70131 17.0186 4.87574 17.0186 5.09092C17.0186 5.3061 17.193 5.48053 17.4082 5.48053Z"
        stroke={fill}
        stroke-width="1.5"
      />
    </svg>
  );
};

export default Instagram;