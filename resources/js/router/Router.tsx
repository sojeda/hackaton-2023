import { Navigate, Route, Routes, useLocation } from "react-router-dom";
import type { Location } from "react-router-dom";

import { Home, NotFound } from "@/screens";
import { ModalRouter } from "./ModalRouter";
import { ROUTES } from "./routes";

export const Router = () => {
  const location = useLocation();
  const { previousLocation } = (location.state ?? {}) as {
    previousLocation?: Location;
  };

  return (
    <>
      <Routes location={previousLocation ?? location}>
        {/* PRIVATE ONLY ROUTES */}
        <Route element={<Navigate to={ROUTES.home} />} path={ROUTES.base} />

        <Route element={<Home />} path={ROUTES.home} />

        <Route path={ROUTES.notFound} element={<NotFound />} />
      </Routes>

      {/* MODALS ROUTES */}
      <Routes>
        <Route
          path="*"
          element={<ModalRouter showModal={!!previousLocation} />}
        />
      </Routes>
    </>
  );
};
