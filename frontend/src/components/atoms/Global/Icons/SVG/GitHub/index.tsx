import React from "react";
import { SVGIconProps } from "../types";

const GitHub: React.FC<SVGIconProps> = ({ size, fill }): JSX.Element => {
  return (
    <svg
      width={size}
      height={size}
      viewBox="0 0 20 20"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M13.5852 19.25C14.247 19.25 13.4043 19.25 13.4043 19.25H7.74101C7.74101 19.25 6.967 19.25 7.62882 19.25C7.62882 18.743 7.62882 19.0266 7.62882 18.743L7.58155 16.3793C4.22519 17.1357 3.5161 15.0557 3.5161 15.0557C2.94883 13.6375 2.19247 13.3066 2.19247 13.3066C1.05792 12.5502 2.23974 12.5502 2.23974 12.5502C3.46883 12.6448 4.13064 13.7793 4.13064 13.7793C5.17064 15.623 6.91973 15.103 7.62882 14.8193C7.72337 14.0157 8.05427 13.4957 8.38518 13.1648C5.69064 12.8812 2.90156 11.8412 2.90156 7.20844C2.90156 5.88481 3.37428 4.79754 4.13064 3.94663C3.98883 3.66299 3.61065 2.4339 4.27246 0.779361C4.27246 0.779361 5.26519 0.448452 7.58155 2.00845C9.567 1.44118 11.647 1.44118 13.6324 2.00845C15.9488 0.448452 16.9415 0.779361 16.9415 0.779361C17.6033 2.4339 17.2252 3.66299 17.0834 3.94663C17.8397 4.79754 18.3124 5.88481 18.3124 7.20844C18.3124 11.8412 15.4761 12.8812 12.7815 13.1648C13.2543 13.543 13.6324 14.2993 13.6324 15.4339L13.5852 18.743C13.5852 19.0081 13.5852 18.743 13.5852 19.25Z"
        fill={fill}
      />
    </svg>
  );
};

export default GitHub;