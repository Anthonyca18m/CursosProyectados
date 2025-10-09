import { createContext, useState, useContext  } from 'react';

const ThemeContext = createContext();

function ThemeProvider({ children }) {
  const [theme, setTheme] = useState('light');
  
  const toggleTheme = () => {
    setTheme(prevTheme => prevTheme === 'light' ? 'dark' : 'light');
  };
  
  return (
    <ThemeContext.Provider value={{ theme, toggleTheme }}>
      {children}
    </ThemeContext.Provider>
  );
}

function ThemeButton() {
  const { theme, toggleTheme } = useContext(ThemeContext);
  
  return (
    <button 
      onClick={toggleTheme}
      style={{
        backgroundColor: theme === 'light' ? '#ffffff' : '#333333',
        color: theme === 'light' ? '#000000' : '#ffffff'
      }}
    >
      Cambiar tema
    </button>
  );
}


function App() {
  return (
    <>
      <ThemeProvider>
        <div className="App">
          <ThemeButton />
          {/* Otros componentes */}
        </div>
      </ThemeProvider>
    </>
  )
}

export default App
