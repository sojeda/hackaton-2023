import { Link } from "react-router-dom";

import { ROUTES } from "@/router";
import photo3 from "../../../public/assets/photo3.png";

export const NotFound = () => {
  return (
    <div className="relative isolate h-screen min-h-full">
      <img
        src={photo3}
        alt=""
        className="absolute inset-0 -z-10 h-full w-full object-cover object-top"
      />
      <div className="mx-auto max-w-7xl px-6 py-32 text-center sm:py-40 lg:px-8">
        <p className="text-base font-semibold leading-8 text-black">404</p>
        <h1 className="mt-4 text-3xl font-bold tracking-tight text-black sm:text-5xl">
          Page not found
        </h1>
        <p className="mt-4 text-base text-black sm:mt-6">
          Sorry, we couldn’t find the page you’re looking for.
        </p>
        <div className="mt-10 flex justify-center">
          <Link
            to={ROUTES.base}
            className="text-sm font-semibold leading-7 text-black"
          >
            <span aria-hidden="true">&larr;</span> Back to home
          </Link>
        </div>
      </div>
    </div>
  );
};
