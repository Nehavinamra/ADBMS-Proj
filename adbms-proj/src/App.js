import "./App.css";
import { Routes, Route, BrowserRouter } from "react-router-dom";

import HomePage from "./pages/HomePage/HomePage";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<HomePage />}>
          {" "}
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
